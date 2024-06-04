<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Infrastructure;

use MyCoon\Shared\Domain\RandomNumberGenerator;

final class ConstantRandomNumberGenerator implements RandomNumberGenerator
{
    public function generate(): int
    {
        return 1;
    }
}
