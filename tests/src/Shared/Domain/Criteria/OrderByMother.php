<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Domain\Criteria;

use MyCoon\Shared\Domain\Criteria\OrderBy;
use MyCoon\Tests\Shared\Domain\WordMother;

final class OrderByMother
{
    public static function create($fieldName): OrderBy
    {
        return new OrderBy($fieldName);
    }

    public static function random(): OrderBy
    {
        return self::create(WordMother::random());
    }
}
