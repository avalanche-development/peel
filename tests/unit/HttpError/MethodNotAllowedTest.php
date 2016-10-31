<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class MethodNotAllowedTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new MethodNotAllowed;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new MethodNotAllowed;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new MethodNotAllowed;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(405, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new MethodNotAllowed;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Method Not Allowed', $statusMessage);
    }
}
