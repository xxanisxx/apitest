<?php

namespace App\Authorizations;

use Symfony\Component\Security\Core\User\UserInterface;

interface ResourceAccessCheckerInterface
{
    const MESSAGE_ERROR = "It's not your resource";

    public function canAccess(?int $id): void;
}
