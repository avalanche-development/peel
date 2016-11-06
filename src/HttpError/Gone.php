<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class Gone extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 410;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Gone';
    }
}
