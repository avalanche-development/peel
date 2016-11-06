<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class NotAcceptable extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 406;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Not Acceptable';
    }
}
