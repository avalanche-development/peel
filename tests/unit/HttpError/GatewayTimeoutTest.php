<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class GatewayTimeoutTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new GatewayTimeout;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new GatewayTimeout;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new GatewayTimeout;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(504, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new GatewayTimeout;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Gateway Timeout', $statusMessage);
    }
}
