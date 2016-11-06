<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class PreconditionFailed extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 412;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Precondition Failed';
    }
}
