<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Infrastructure\PhpUnit\Comparator;

use MyCoon\Shared\Domain\Bus\Event\DomainEvent;
use MyCoon\Tests\Shared\Domain\TestUtils;
use ReflectionObject;
use SebastianBergmann\Comparator\Comparator;
use SebastianBergmann\Comparator\ComparisonFailure;

final class DomainEventSimilarComparator extends Comparator
{
    private static $ignoredAttributes = ['eventId', 'occurredOn'];

    public function accepts($expected, $actual): bool
    {
        $domainEventRootClass = DomainEvent::class;

        return $expected instanceof $domainEventRootClass && $actual instanceof $domainEventRootClass;
    }

    /**
     * @param DomainEvent $expected
     * @param DomainEvent $actual
     */
    public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false): void
    {
        if (!$this->areSimilar($expected, $actual)) {
            throw new ComparisonFailure(
                $expected,
                $actual,
                $this->exporter->export($expected),
                $this->exporter->export($actual),
                false,
                'Failed asserting the events are equal.'
            );
        }
    }

    private function areSimilar(DomainEvent $expected, DomainEvent $actual): bool
    {
        if (!$this->areTheSameClass($expected, $actual)) {
            return false;
        }

        return $this->propertiesAreSimilar($expected, $actual);
    }

    private function areTheSameClass(DomainEvent $expected, DomainEvent $actual): bool
    {
        return get_class($expected) === get_class($actual);
    }

    private function propertiesAreSimilar(DomainEvent $expected, DomainEvent $actual): bool
    {
        $expectedReflected = new ReflectionObject($expected);
        $actualReflected   = new ReflectionObject($actual);

        foreach ($expectedReflected->getProperties() as $expectedReflectedProperty) {
            if (!in_array($expectedReflectedProperty->getName(), self::$ignoredAttributes, false)) {
                $actualReflectedProperty = $actualReflected->getProperty($expectedReflectedProperty->getName());

                $expectedReflectedProperty->setAccessible(true);
                $actualReflectedProperty->setAccessible(true);

                $expectedProperty = $expectedReflectedProperty->getValue($expected);
                $actualProperty   = $actualReflectedProperty->getValue($actual);

                if (!TestUtils::isSimilar($expectedProperty, $actualProperty)) {
                    return false;
                }
            }
        }

        return true;
    }
}
