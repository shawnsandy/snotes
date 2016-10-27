<?php

namespace ShawnSandy\PkgStart;

use Illuminate\Support\ServiceProvider;

/**
 * Class Provider
 *
 * @package ShawnSandy\PkgStart
 */
class Provider extends ServiceProvider
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


        $this->publishes(
            [__DIR__ . '/config/pagekit.php' => config_path('pagekit.php')],
            'pagekit-config'
        );

        if (!$this->app->runningInConsole()) :
            include_once __DIR__ . 'App/Helpers/helper.php';
        endif;


    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        /***  Remove line to uncomment and setup ****
       $this->mergeConfigFrom(
            __DIR__ . 'App/config/config.php', '__YOUR_KEY_NAME__'
        );
        $this->app->bind(
            '__YOUR_FACADENAME__', function () {
                return new YOUR_CLASSNAME();
            }
        );
      *** remove line to uncomment ***/
    }
}
