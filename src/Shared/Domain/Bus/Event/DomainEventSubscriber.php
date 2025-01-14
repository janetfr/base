<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Domain\Bus\Event;

interface DomainEventSubscriber
{
    public static function subscribedTo(): array;
}
