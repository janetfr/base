<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Domain\Criteria;

use MyCoon\Shared\Domain\Criteria\FilterField;
use MyCoon\Tests\Shared\Domain\WordMother;

final class FilterFieldMother
{
    public static function create($fieldName): FilterField
    {
        return new FilterField($fieldName);
    }

    public static function random(): FilterField
    {
        return self::create(WordMother::random());
    }
}
