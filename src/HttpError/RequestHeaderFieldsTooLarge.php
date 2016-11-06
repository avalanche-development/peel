<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class RequestHeaderFieldsTooLarge extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 431;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Request Header Fields Too Large';
    }
}
