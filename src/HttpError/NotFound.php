<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class NotFound extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 404;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Not Found';
    }
}
