<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class InternalServerError extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 500;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Internal Server Error';
    }
}
