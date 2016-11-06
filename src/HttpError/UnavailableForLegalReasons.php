<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class UnavailableForLegalReasons extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 451;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Unavailable For Legal Reasons';
    }
}
