<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class Forbidden extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 403;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Forbidden';
    }
}
