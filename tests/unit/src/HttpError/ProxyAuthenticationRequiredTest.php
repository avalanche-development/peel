<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class ProxyAuthenticationRequiredTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new ProxyAuthenticationRequired;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new ProxyAuthenticationRequired;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new ProxyAuthenticationRequired;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(407, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new ProxyAuthenticationRequired;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Proxy Authentication Required', $statusMessage);
    }
}
