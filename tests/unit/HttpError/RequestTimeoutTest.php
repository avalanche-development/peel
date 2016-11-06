<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class RequestTimeoutTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new RequestTimeout;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new RequestTimeout;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new RequestTimeout;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(408, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new RequestTimeout;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Request Timeout', $statusMessage);
    }
}
