<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class RequestEntityTooLargeTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new RequestEntityTooLarge;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new RequestEntityTooLarge;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new RequestEntityTooLarge;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(413, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new RequestEntityTooLarge;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Request Entity Too Large', $statusMessage);
    }
}
