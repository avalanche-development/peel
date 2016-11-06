<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class Unauthorized extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 401;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Unauthorized';
    }
}
