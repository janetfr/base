<?php

namespace MyCoon\Backoffice\User\Application\Authentication;

use MyCoon\Shared\Domain\Bus\Command\Command;

class AuthenticateUserCommand implements Command
{
    private string $user;
    private string $password;

    public function __construct(string $user, string $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    public function user(): string
    {
        return $this->user;
    }

    public function password(): string
    {
        return $this->password;
    }
}