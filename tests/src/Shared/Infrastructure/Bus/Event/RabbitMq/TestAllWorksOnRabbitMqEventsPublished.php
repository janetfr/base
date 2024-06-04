<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Infrastructure\Bus\Event\RabbitMq;

use MyCoon\Mooc\Courses\Domain\CourseCreatedDomainEvent;
use MyCoon\Mooc\CoursesCounter\Domain\CoursesCounterIncrementedDomainEvent;
use MyCoon\Shared\Domain\Bus\Event\DomainEventSubscriber;

final class TestAllWorksOnRabbitMqEventsPublished implements DomainEventSubscriber
{
    public static function subscribedTo(): array
    {
        return [
            CourseCreatedDomainEvent::class,
            CoursesCounterIncrementedDomainEvent::class,
        ];
    }

    /** @param CourseCreatedDomainEvent|CoursesCounterIncrementedDomainEvent $event */
    public function __invoke($event)
    {
    }
}
