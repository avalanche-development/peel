<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class RequestTimeout extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 408;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Request Timeout';
    }
}
