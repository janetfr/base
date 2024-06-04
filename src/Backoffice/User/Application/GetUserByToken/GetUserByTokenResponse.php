<?php

namespace MyCoon\Backoffice\User\Application\GetUserByToken;

use MyCoon\Backoffice\User\Domain\User;
use MyCoon\Shared\Domain\Bus\Query\Response;

class GetUserByTokenResponse implements Response
{
    private string $id;
    private string $username;
    private string $token;
    private array $roles;
    private array $permissions;

    public function __construct(User $user)
    {
        $this->id = $user->id();
        $this->username = $user->username();
        $this->roles = $user->roles();
        $this->token = $user->token();
        $this->permissions = $user->permissions();
    }

    public function id(): string
    {
        return $this->id;
    }

    public function username(): string
    {
        return $this->username;
    }

    public function roles(): array
    {
        return $this->roles;
    }

    public function token(): string
    {
        return $this->token;
    }

    public function permissions(): array
    {
        return $this->permissions;
    }
}