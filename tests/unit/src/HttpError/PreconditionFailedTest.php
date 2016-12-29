<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class PreconditionFailedTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new PreconditionFailed;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new PreconditionFailed;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new PreconditionFailed;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(412, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new PreconditionFailed;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Precondition Failed', $statusMessage);
    }
}
