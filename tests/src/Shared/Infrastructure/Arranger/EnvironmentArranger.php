<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Infrastructure\Arranger;

interface EnvironmentArranger
{
    public function arrange(): void;

    public function close(): void;
}
