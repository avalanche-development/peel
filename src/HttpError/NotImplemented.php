<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class NotImplemented extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 501;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Not Implemented';
    }
}
