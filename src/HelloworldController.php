<?php

namespace Tomothumb\LaravelpkgHelloworld;

use App\Http\Controllers\Controller;
use Tomothumb\LaravelpkgHelloworld\Contracts\HelloworldContracts;


class HelloworldController extends Controller
{
    public function getHelloworld()
    {
        return "Hello world";
    }

    public function getServiceSample()
    {
        $service_sample = app()->get('Tomothumb\LaravelpkgHelloworld\Contracts\HelloworldContracts');
        return $service_sample->print();
    }

    public function getServiceSampleDI(HelloworldContracts $service_sample)
    {
        return $service_sample->print().'di';
    }

    public function getServiceSampleFacade()
    {
        return \HelloworldFacade::print().'facade';
    }


}
