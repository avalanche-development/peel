<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class BadGatewayTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new BadGateway;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new BadGateway;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new BadGateway;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(502, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new BadGateway;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Bad Gateway', $statusMessage);
    }
}
