<?php

namespace ShawnSandy\Summernote;

use Illuminate\Support\ServiceProvider;
use ShawnSandy\Summernote\App\Notes\Notes;


/**
 * Class Provider
 *
 * @package ShawnSandy\PkgStart
 */
class SummerNoteServicesProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'snote');
        $this->publishes(
            [
                __DIR__ . '/resources/views' => resource_path('views/vendor/snote'),
            ], 'snote-views'
        );

        /**
         * Package assets
         */
        $this->publishes(
          [
              __DIR__.'/../node_modules/summernote/dist/' => public_path('assets/summernote')
          ], 'snote-assets'
        );

        /**
         * Package config
         */
        $this->publishes(
            [__DIR__ . '/App/config/config.php' => config_path('snote.php')],
            'snote-config'
        );



        if (!$this->app->runningInConsole()) :
            include_once __DIR__ . '/App/Helpers/helper.php';
        endif;


    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

       $this->mergeConfigFrom(
            __DIR__ . '/App/config/config.php', 'snote'
        );
        $this->app->bind(
            'Notes', function () {
                return new Notes();
            }
        );
    }
}
