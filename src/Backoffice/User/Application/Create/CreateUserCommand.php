<?php

namespace MyCoon\Backoffice\User\Application\Create;

use MyCoon\Shared\Domain\Bus\Command\Command;

class CreateUserCommand implements Command
{
    private string $id;
    private string $username;
    private string $password;

    public function __construct(string $id, string $username, string $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function username(): string
    {
        return $this->username;
    }

    public function password(): string
    {
        return $this->password;
    }
}