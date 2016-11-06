<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class ProxyAuthenticationRequired extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 407;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Proxy Authentication Required';
    }
}
