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

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes.php';

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
