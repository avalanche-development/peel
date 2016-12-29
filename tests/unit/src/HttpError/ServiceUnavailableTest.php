<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class ServiceUnavailableTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new ServiceUnavailable;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new ServiceUnavailable;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new ServiceUnavailable;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(503, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new ServiceUnavailable;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Service Unavailable', $statusMessage);
    }
}
