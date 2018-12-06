<?php

namespace Tomothumb\LaravelpkgHelloworld\Service;

use Tomothumb\LaravelpkgHelloworld\Contracts\HelloworldContracts;

class HelloworldService implements HelloworldContracts
{
    private $message;


    /**
     * Sample constructor.
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
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
