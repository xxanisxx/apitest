<?php

namespace App\Authorizations;

interface AuthentificationCheckerInterface
{
    const ERROR_MESSAGE = 'You are not authenticated';

    public function isAuthenticated(): void;
}
