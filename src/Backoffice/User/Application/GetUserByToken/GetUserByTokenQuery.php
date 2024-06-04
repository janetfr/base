<?php

namespace MyCoon\Backoffice\User\Application\GetUserByToken;

use MyCoon\Shared\Domain\Bus\Query\Query;

class GetUserByTokenQuery implements Query
{
    private string $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function token(): string
    {
        return $this->token;
    }
}