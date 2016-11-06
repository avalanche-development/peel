<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class ServiceUnavailable extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 503;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Service Unavailable';
    }
}
