<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class UnauthorizedTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new Unauthorized;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new Unauthorized;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new Unauthorized;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(401, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new Unauthorized;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Unauthorized', $statusMessage);
    }
}
