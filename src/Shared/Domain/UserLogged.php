<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Domain;

use MyCoon\Backoffice\User\Domain\User;

interface UserLogged
{
    public function userLogged();
    public function isUserLogged(): bool;
}