<?php

namespace MyCoon\Backoffice\User\Domain;

class UserResponse {

    private string $id;
    private string $username;
    private string $token;

    public function __construct(User $user)
    {
        $this->id = $user->id();
        $this->username = $user->username();
        $this->token = $user->token();
    }
}