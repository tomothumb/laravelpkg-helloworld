<?php

namespace Tomothumb\LaravelpkgHelloworld\Facades;

use Illuminate\Support\Facades\Facade;

class HelloworldFacade extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'Tomothumb\LaravelpkgHelloworld\Contracts\HelloworldContracts';
    }
}