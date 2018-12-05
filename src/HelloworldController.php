<?php

namespace Tomothumb\LaravelpkgHelloworld;

use App\Http\Controllers\Controller;


class HelloworldController extends Controller
{
    public function getHelloworld()
    {
        return "Hello world";
    }

    public function getServiceSample()
    {
        $service_sample = app()->get('Tomothumb\LaravelpkgHelloworld\Service\SampleService');
        return $service_sample->print();
    }
}
