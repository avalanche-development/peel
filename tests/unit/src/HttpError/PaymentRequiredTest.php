<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class PaymentRequiredTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new PaymentRequired;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new PaymentRequired;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new PaymentRequired;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(402, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new PaymentRequired;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Payment Required', $statusMessage);
    }
}
