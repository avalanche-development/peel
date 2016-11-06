<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class RequestedRangeNotSatisfiable extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 416;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Requested Range Not Satisfiable';
    }
}
