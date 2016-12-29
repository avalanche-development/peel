<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;
use PHPUnit_Framework_TestCase;

class UnprocessableEntityTest extends PHPUnit_Framework_TestCase
{

    public function testImplementsHttpErrorInterface()
    {
        $exception = new UnprocessableEntity;

        $this->assertInstanceOf(HttpErrorInterface::class, $exception);
    }

    public function testExtendsException()
    {
        $exception = new UnprocessableEntity;

        $this->assertInstanceOf(Exception::class, $exception);
    }

    public function testStatusCode()
    {
        $exception = new UnprocessableEntity;
        $statusCode = $exception->getStatusCode();

        $this->assertSame(422, $statusCode);
    }

    public function testStatusMessage()
    {
        $exception = new UnprocessableEntity;
        $statusMessage = $exception->getStatusMessage();

        $this->assertSame('Unprocessable Entity', $statusMessage);
    }
}
