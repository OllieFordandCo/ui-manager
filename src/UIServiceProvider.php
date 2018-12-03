<?php

namespace OllieFordandCo\UI;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Service provider
 */
class UIServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'uiManager');

        /**
         * Let the system publish the configuration to the main instance for modification
         */
        if ($this->app->runningInConsole()) {

            // Config
            $this->publishes([
                __DIR__ . '/../config/ui-manager.php' => config_path('ui-manager.php'),
            ], 'ui-manager-config');

            // Assets
            $this->publishes([
                __DIR__ . '/../public' => public_path('/assets'),
            ], 'ui-manager-assets');
        }

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/ui-manager.php', 'ui-manager'
        );
    }
}
