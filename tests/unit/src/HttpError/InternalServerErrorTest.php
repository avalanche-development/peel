<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class InternalServerErrorTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new InternalServerError;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new InternalServerError;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new InternalServerError;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(500, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new InternalServerError;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Internal Server Error', $statusMessage);
    }
}
