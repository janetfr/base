<?php

namespace MyCoon\Backoffice\User\Application\Find;

use MyCoon\Shared\Domain\Bus\Query\Query;

class FindUserQuery implements Query
{
    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function id(): string
    {
        return $this->id;
    }
}