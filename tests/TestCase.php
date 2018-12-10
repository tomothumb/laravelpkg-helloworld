<?php

namespace Tests;

class TestCase extends \Orchestra\Testbench\TestCase{

    protected function getPackageProviders($app)
    {
        return [
            'Tomothumb\LaravelpkgHelloworld\HelloworldServiceProvider',
        ];
    }

    protected function getApplicationAliases($app)
    {
        return [
            'HelloworldFacade' => 'Tomothumb\LaravelpkgHelloworld\Facades\HelloworldFacade'
        ];
    }

}
