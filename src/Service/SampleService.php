<?php

namespace Tomothumb\LaravelpkgHelloworld\Service;

use Tomothumb\LaravelpkgHelloworld\Contracts\SampleContracts;

class SampleService implements SampleContracts
{
    private $message;


    /**
     * Sample constructor.
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function print()
    {
        echo $this->message;
    }

    public function printDouble()
    {
        echo $this->message . $this->message;
    }
}
