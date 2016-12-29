<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class NotAcceptableTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new NotAcceptable;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new NotAcceptable;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new NotAcceptable;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(406, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new NotAcceptable;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Not Acceptable', $statusMessage);
    }
}
