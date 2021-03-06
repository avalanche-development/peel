<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class ExpectationFailed extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 417;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Expectation Failed';
    }
}
