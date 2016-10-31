<?php

namespace AvalancheDevelopment\Peel;

interface HttpErrorInterface
{
    public function getStatusCode();
    public function getStatusMessage();
}
