<?php

namespace Tomothumb\LaravelpkgHelloworld;

use Illuminate\Support\ServiceProvider;
use Tomothumb\LaravelpkgHelloworld\Service\SampleService;

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

        $this->app->singleton('Tomothumb\LaravelpkgHelloworld\Contracts\SampleContracts', function($app){
            return new SampleService("Hello Universe.");
        });
    }
}
