<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class GatewayTimeout extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 504;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Gateway Timeout';
    }
}
