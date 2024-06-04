<?php


namespace MyCoon\Backoffice\User\Domain;


use MyCoon\Shared\Domain\Bus\Event\DomainEvent;

class SimpleUserCreatedDomainEvent extends DomainEvent
{
    private string $id;
    private string $username;
    private string $password;
    private string $token;
    private string $email;
    private string $emailValidated;

    public function __construct(
        string $id,
        string $username,
        string $password,
        string $token,
        string $email,
        string $emailValidated,
        string $eventId = null,
        string $occurredOn = null
    )
    {
        parent::__construct($id, $eventId, $occurredOn);
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->token = $token;
        $this->email = $email;
        $this->emailValidated = $emailValidated;
    }

    public static function eventName(): string
    {
        return 'SimpleUser.created';
    }

    public function toPrimitives(): array
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'email' => $this->email,
            'emailValidated' => $this->emailValidated
        ];
    }

    public static function fromPrimitives(string $aggregateId, array $body, string $eventId, string $occurredOn): DomainEvent
    {
        return new self($aggregateId, $body['id'], $body['username'], $body['password'], $body['token'], $body['email'], $eventId, $occurredOn);
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

    public function email(): string
    {
        return $this->email;
    }

    public function emailValidated(): string
    {
        return $this->emailValidated;
    }
}