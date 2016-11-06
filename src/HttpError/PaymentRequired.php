<?php

namespace AvalancheDevelopment\Peel\HttpError;

use AvalancheDevelopment\Peel\HttpErrorInterface;
use Exception;

class PaymentRequired extends Exception implements HttpErrorInterface
{

    /**
     * @return integer
     */
    public function getStatusCode()
    {
        return 402;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return 'Payment Required';
    }
}
