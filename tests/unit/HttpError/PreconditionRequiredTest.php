<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class PreconditionRequiredTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new PreconditionRequired;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new PreconditionRequired;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new PreconditionRequired;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(428, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new PreconditionRequired;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Precondition Required', $statusMessage);
    }
}
