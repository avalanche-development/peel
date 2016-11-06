<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class Conflict extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 409;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Conflict';
    }
}
