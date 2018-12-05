<?php

namespace Tomothumb\LaravelpkgHelloworld\Service;

class SampleService
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
}
