<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class UnsupportedMediaType extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 415;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Unsupported Media Type';
    }
}
