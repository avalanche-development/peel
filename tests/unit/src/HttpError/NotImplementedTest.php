<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class NotImplementedTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new NotImplemented;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new NotImplemented;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new NotImplemented;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(501, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new NotImplemented;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Not Implemented', $statusMessage);
    }
}
