<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Domain\ValueObject;

use InvalidArgumentException;

abstract class StringDateValueObject
{
    protected $value;

    public function __construct(string $value)
    {
        if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $value)) {
            throw new InvalidArgumentException(sprintf('The value <%s> is invalid', $value));
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value();
    }
}