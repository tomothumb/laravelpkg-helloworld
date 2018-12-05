<?php

namespace Tomothumb\LaravelpkgHelloworld;

use App\Http\Controllers\Controller;
use Tomothumb\LaravelpkgHelloworld\Service\SampleService;


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

    public function getServiceSampleDI(SampleService $service_sample)
    {
        return $service_sample->print();
    }
}
