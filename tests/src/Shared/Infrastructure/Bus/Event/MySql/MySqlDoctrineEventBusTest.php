<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Infrastructure\Bus\Event\MySql;

use MyCoon\Shared\Domain\Bus\Event\DomainEvent;
use MyCoon\Shared\Infrastructure\Bus\Event\DomainEventMapping;
use MyCoon\Shared\Infrastructure\Bus\Event\MySql\MySqlDoctrineDomainEventsConsumer;
use MyCoon\Shared\Infrastructure\Bus\Event\MySql\MySqlDoctrineEventBus;
use MyCoon\Tests\Mooc\Courses\Domain\CourseCreatedDomainEventMother;
use MyCoon\Tests\Mooc\CoursesCounter\Domain\CoursesCounterIncrementedDomainEventMother;
use MyCoon\Tests\Shared\Infrastructure\PhpUnit\InfrastructureTestCase;
use Doctrine\ORM\EntityManager;

final class MySqlDoctrineEventBusTest extends InfrastructureTestCase
{
    private $bus;
    private $consumer;

    protected function setUp(): void
    {
        parent::setUp();

        $this->bus      = new MySqlDoctrineEventBus($this->service(EntityManager::class));
        $this->consumer = new MySqlDoctrineDomainEventsConsumer(
            $this->service(EntityManager::class),
            $this->service(DomainEventMapping::class)
        );
    }

    /** @test */
    public function it_should_publish_and_consume_domain_events_from_msql(): void
    {
        $domainEvent        = CourseCreatedDomainEventMother::random();
        $anotherDomainEvent = CoursesCounterIncrementedDomainEventMother::random();

        $this->bus->publish($domainEvent, $anotherDomainEvent);

        $this->consumer->consume(
            $this->spySubscriber($domainEvent, $anotherDomainEvent),
            $eventsToConsume = 2
        );
    }

    private function spySubscriber(DomainEvent ...$expectedDomainEvents): callable
    {
        return function (DomainEvent $domainEvent) use ($expectedDomainEvents): void {
            $this->assertContainsEquals($domainEvent, $expectedDomainEvents);
        };
    }
}
