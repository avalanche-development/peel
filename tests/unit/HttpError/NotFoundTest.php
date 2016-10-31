<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class NotFoundTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new NotFound;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new NotFound;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new NotFound;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(404, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new NotFound;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Not Found', $statusMessage);
    }
}
