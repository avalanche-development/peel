<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class RequestHeaderFieldsTooLargeTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new RequestHeaderFieldsTooLarge;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new RequestHeaderFieldsTooLarge;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new RequestHeaderFieldsTooLarge;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(431, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new RequestHeaderFieldsTooLarge;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Request Header Fields Too Large', $statusMessage);
    }
}
