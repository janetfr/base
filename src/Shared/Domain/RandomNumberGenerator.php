<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Domain;

interface RandomNumberGenerator
{
    public function generate(): int;
}
