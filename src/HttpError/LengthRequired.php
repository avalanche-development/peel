<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class LengthRequired extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 411;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Length Required';
    }
}
