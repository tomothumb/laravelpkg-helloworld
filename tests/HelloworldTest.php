<?php

namespace Tomothumb\LaravelpkgHelloworld\Tests;

use Tests\TestCase;
use Tomothumb\LaravelpkgHelloworld\Service\HelloworldService;

class HelloworldTest extends TestCase
{

    public function testSearvice()
    {
        $h = new HelloworldService("Hello");
        $this->assertSame( "Hello", $h->getMessage() );
    }

    public function testFacadeDefault()
    {
        $this->assertSame( "Hello Universe.", \HelloworldFacade::getMessage() );
    }

}