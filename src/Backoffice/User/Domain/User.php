<?php

namespace MyCoon\Backoffice\User\Domain;

use Ramsey\Uuid\Uuid;
use MyCoon\Shared\Domain\Aggregate\AggregateRoot;

class User extends AggregateRoot
{
    private string $id;
    private string $username;
    private string $password;
    private string $token;

    public function __construct(string $id, string $username, string $password, string $token)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->token = $token;
    }

    public static function basic
    (
        string $id,
        string $username,
        string $password,
        string $token
    )
    {
        $user = new self($id, $username, $password, $token);
        //$user->record(new SimpleUserCreatedDomainEvent($id->value(), $username->value(), $password->value(), "", $email->value(), $emailValidated->value()));

        return $user;
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

    public function token(): string
    {
        return $this->token;
    }

    public function reloadToken()
    {
        //$this->token = sha1($this->username() . Uuid::uuid1() . "6rgbz0mES7");
    }
}