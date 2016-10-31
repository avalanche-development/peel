<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class MethodNotAllowed extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 405;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Method Not Allowed';
    }
}
