<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class BadRequestTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new BadRequest;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new BadRequest;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new BadRequest;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(400, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new BadRequest;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Bad Request', $statusMessage);
    }
}
