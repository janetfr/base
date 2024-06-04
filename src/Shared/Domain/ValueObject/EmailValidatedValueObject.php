<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Domain\ValueObject;

use InvalidArgumentException;

abstract class EmailValidatedValueObject
{
    protected $value;

    public function __construct(string $value)
    {
        $this->ensureIsValidEmail($value);
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

    private function ensureIsValidEmail($value): void
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(sprintf('<%s> does not allow the value <%s>.', static::class, $value));
        }
    }
}
