<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Domain;

use MyCoon\Tests\Shared\Infrastructure\Mockery\CodelyTvMatcherIsSimilar;
use MyCoon\Tests\Shared\Infrastructure\PhpUnit\Constraint\CodelyTvConstraintIsSimilar;

final class TestUtils
{
    public static function isSimilar($expected, $actual): bool
    {
        $constraint = new CodelyTvConstraintIsSimilar($expected);

        return $constraint->evaluate($actual, '', true);
    }

    public static function assertSimilar($expected, $actual): void
    {
        $constraint = new CodelyTvConstraintIsSimilar($expected);

        $constraint->evaluate($actual);
    }

    public static function similarTo($value, $delta = 0.0): CodelyTvMatcherIsSimilar
    {
        return new CodelyTvMatcherIsSimilar($value, $delta);
    }
}
