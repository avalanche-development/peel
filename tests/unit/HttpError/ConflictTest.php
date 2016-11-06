<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class ConflictTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new Conflict;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new Conflict;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new Conflict;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(409, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new Conflict;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Conflict', $statusMessage);
    }
}
