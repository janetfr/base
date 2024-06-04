<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Infrastructure\Bus\Query;

use MyCoon\Shared\Domain\Bus\Query\Response;

final class FakeResponse implements Response
{
    private $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function number(): int
    {
        return $this->number;
    }
}
