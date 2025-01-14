<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Domain\Criteria;

use MyCoon\Shared\Domain\Criteria\Filter;
use MyCoon\Shared\Domain\Criteria\FilterField;
use MyCoon\Shared\Domain\Criteria\FilterOperator;
use MyCoon\Shared\Domain\Criteria\FilterValue;

final class FilterMother
{
    public static function create(FilterField $field, FilterOperator $operator, FilterValue $value): Filter
    {
        return new Filter($field, $operator, $value);
    }

    public static function fromValues($values): Filter
    {
        return Filter::fromValues($values);
    }

    public static function random(): Filter
    {
        return self::create(FilterFieldMother::random(), FilterOperator::random(), FilterValueMother::random());
    }
}
