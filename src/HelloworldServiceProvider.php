<?php

namespace Tomothumb\LaravelpkgHelloworld;

use Illuminate\Support\ServiceProvider;
use Tomothumb\LaravelpkgHelloworld\Console\HelloworldCommand;
use Tomothumb\LaravelpkgHelloworld\Service\HelloworldService;

class HelloworldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Distribute Config File
        $this->publishes([
            __DIR__ . '/Resource/Config/helloworld.php' => config_path('helloworld.php')
        ], 'config');

        // Route
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Migration
//        $this->loadMigrationsFrom(__DIR__.'/path/to/migrations');
//        $this->publishes([
//            __DIR__.'/../database/migrations/' => database_path('migrations')
//        ], 'migrations');


        // Translation
        $this->loadTranslationsFrom(__DIR__ . '/Resource/Translation', 'helloworld');

        // Distribute Translation File
        $this->publishes([
            __DIR__.'/Resource/Translation' => resource_path('lang/vendor/helloworld'),
        ],'lang');

        // view
        $this->loadViewsFrom(__DIR__.'/Resource/View', 'laravelpkg_helloworld');

        $this->publishes([
            __DIR__.'/Resource/View' => resource_path('views/vendor/laravelpkg_helloworld'),
        ],'view');

        //Resources
        $this->publishes([
            __DIR__.'/Resource/Assets' => public_path('vendor/laravelpkg_helloworld'),
        ], 'public');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        // Service
        $this->app->singleton('Tomothumb\LaravelpkgHelloworld\Contracts\HelloworldContracts', function($app){
            return new HelloworldService("Hello Universe.");
        });

        // Command
        $this->app->singleton('Tomothumb\LaravelpkgHelloworld\Command\HelloworldCommand', function ($app) {
            return new HelloworldCommand();
        });
        if ($this->app->runningInConsole()) {
            $this->commands('Tomothumb\LaravelpkgHelloworld\Command\HelloworldCommand');
        }

    }
}
