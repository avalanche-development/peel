<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class ExpectationFailedTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new ExpectationFailed;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new ExpectationFailed;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new ExpectationFailed;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(417, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new ExpectationFailed;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Expectation Failed', $statusMessage);
    }
}
