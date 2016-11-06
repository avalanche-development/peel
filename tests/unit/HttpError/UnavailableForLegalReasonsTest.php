<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class UnavailableForLegalReasonsTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new UnavailableForLegalReasons;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new UnavailableForLegalReasons;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new UnavailableForLegalReasons;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(451, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new UnavailableForLegalReasons;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Unavailable For Legal Reasons', $statusMessage);
    }
}
