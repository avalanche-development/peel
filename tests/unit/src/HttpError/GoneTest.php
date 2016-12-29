<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class GoneTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new Gone;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new Gone;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new Gone;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(410, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new Gone;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Gone', $statusMessage);
    }
}
