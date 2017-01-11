<?php

namespace ShawnSandy\Summernote;

use Blade;
use Illuminate\Support\ServiceProvider;
use ShawnSandy\Summernote\App\Notes\Notes;
use Storage;


/**
 * Class Provider
 *
 * @package ShawnSandy\Summernote
 */
class NotesServicesProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            include __DIR__ . '/App/routes.php';
        }


        /**
         * Package views
         */
        $this->loadViewsFrom(__DIR__ . '/App/resources/views/', 'notes');

        $this->publishes(
            [
                __DIR__ . '/resources/views' => resource_path('views/vendor/snotes'),
            ], 'notes-views'
        );

        /**
         * Package assets
         */
        $this->publishes(
          [
              __DIR__.'./../node_modules/summernote/dist/' => public_path('assets/summernote/'),
              __DIR__.'./App/resources/assets/css/' => public_path('assets/notes/css/'),
              __DIR__.'./App/resources/assets/js/' => public_path('assets/notes/js/'),
              __DIR__.'./public/assets/' => public_path('assets/'),
              __DIR__.'./public/img/' => public_path('img/notes/'),
          ], 'notes-assets'
        );

        /**
         * Package config
         */
        $this->publishes(
            [__DIR__ . '/App/config/config.php' => config_path('notes.php')],
            'notes-config'
        );



        if (!$this->app->runningInConsole()) :
            include_once __DIR__ . '/App/Helpers/helper.php';
        endif;

        /**
         * Directives
         */

        Blade::directive('summernoteScript', function(){
            return notesJs();
        });

        Blade::directive('summernoteStyle', function(){
            return notesStyle();
        });

        Blade::directive('summernoteScriptCdn', function(){
            return notesJsCdn();
        });

        Blade::directive('summernoteStyleCdn', function(){
            return notesStyleCdn();
        });

        $this->loadMigrationsFrom(__DIR__.'/migrations');

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

       $this->mergeConfigFrom(
            __DIR__ . '/App/config/config.php', 'notes'
        );
        $this->app->bind(
            'Notes', function () {
                return new Notes();
            }
        );

    }
}
