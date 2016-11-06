<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class Locked extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 423;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Locked';
    }
}
