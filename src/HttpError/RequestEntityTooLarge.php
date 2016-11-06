<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class RequestEntityTooLarge extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 413;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Request Entity Too Large';
    }
}
