<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Domain\Criteria;

use MyCoon\Shared\Domain\Criteria\FilterValue;
use MyCoon\Tests\Shared\Domain\WordMother;

final class FilterValueMother
{
    public static function create($value): FilterValue
    {
        return new FilterValue($value);
    }

    public static function random(): FilterValue
    {
        return self::create(WordMother::random());
    }
}
