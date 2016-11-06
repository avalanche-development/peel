<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class RequestUriTooLong extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 414;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Request-URI Too Long';
    }
}
