<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class TooManyRequestsTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new TooManyRequests;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new TooManyRequests;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new TooManyRequests;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(429, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new TooManyRequests;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Too Many Requests', $statusMessage);
    }
}
