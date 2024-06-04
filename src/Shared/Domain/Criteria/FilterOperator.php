<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Domain\Criteria;

use MyCoon\Shared\Domain\ValueObject\Enum;
use InvalidArgumentException;

/**
 * @method static FilterOperator gt()
 * @method static FilterOperator lt()
 * @method static FilterOperator like()
 */
final class FilterOperator extends Enum
{
    public const EQUAL        = '=';
    public const NOT_EQUAL    = '!=';
    public const GT           = '>';
    public const LT           = '<';
    public const CONTAINS     = 'CONTAINS';
    public const IN           = 'IN';
    public const NIN          = 'NIN';
    public const NOT_CONTAINS = 'NOT_CONTAINS';
    public const STARTS_WITH  = 'STARTS_WITH';

    private static $containing = [self::CONTAINS, self::NOT_CONTAINS];

    public static function equal(): self
    {
        return new self('=');
    }

    public function isContaining(): bool
    {
        return in_array($this->value(), self::$containing, true);
    }

    protected function throwExceptionForInvalidValue($value): void
    {
        throw new InvalidArgumentException(sprintf('The filter <%s> is invalid', $value));
    }
}
