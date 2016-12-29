<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class RequestedRangeNotSatisfiableTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new RequestedRangeNotSatisfiable;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new RequestedRangeNotSatisfiable;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new RequestedRangeNotSatisfiable;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(416, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new RequestedRangeNotSatisfiable;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Requested Range Not Satisfiable', $statusMessage);
    }
}
