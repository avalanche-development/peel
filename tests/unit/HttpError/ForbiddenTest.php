<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class ForbiddenTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new Forbidden;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new Forbidden;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new Forbidden;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(403, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new Forbidden;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Forbidden', $statusMessage);
    }
}
