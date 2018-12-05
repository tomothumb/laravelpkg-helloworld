<?php

namespace Tomothumb\LaravelpkgHelloworld;

use App\Http\Controllers\Controller;
use Tomothumb\LaravelpkgHelloworld\Contracts\SampleContracts;


class HelloworldController extends Controller
{
    public function getHelloworld()
    {
        return "hello world";
    }

    public function getServiceSample()
    {
        $service_sample = app()->get('Tomothumb\LaravelpkgHelloworld\Service\SampleContracts');
        return $service_sample->print();
    }

    public function getServiceSampleDI(SampleContracts $service_sample)
    {
        return $service_sample->print();
    }

}
