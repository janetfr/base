<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Domain\Bus\Event;

interface EventBus
{
    public function publish(DomainEvent ...$events): void;
}
