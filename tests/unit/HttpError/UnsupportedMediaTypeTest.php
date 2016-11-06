<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class UnsupportedMediaTypeTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new UnsupportedMediaType;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new UnsupportedMediaType;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new UnsupportedMediaType;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(415, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new UnsupportedMediaType;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Unsupported Media Type', $statusMessage);
    }
}
