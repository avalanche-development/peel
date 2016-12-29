<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class LockedTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new Locked;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new Locked;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new Locked;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(423, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new Locked;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Locked', $statusMessage);
    }
}
