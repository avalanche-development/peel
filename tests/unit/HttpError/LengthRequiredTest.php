<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class LengthRequiredTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new LengthRequired;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new LengthRequired;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new LengthRequired;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(411, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new LengthRequired;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Length Required', $statusMessage);
    }
}
