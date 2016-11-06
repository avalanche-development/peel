<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class TooManyRequests extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 429;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Too Many Requests';
    }
}
