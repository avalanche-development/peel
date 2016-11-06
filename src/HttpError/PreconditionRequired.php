<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class PreconditionRequired extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 428;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Precondition Required';
    }
}
