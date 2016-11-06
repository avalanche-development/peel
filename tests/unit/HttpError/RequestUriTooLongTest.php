<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class RequestUriTooLongTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new RequestUriTooLong;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new RequestUriTooLong;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new RequestUriTooLong;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(414, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new RequestUriTooLong;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Request-URI Too Long', $statusMessage);
    }
}
