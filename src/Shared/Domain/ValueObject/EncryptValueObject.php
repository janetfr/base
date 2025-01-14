<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Domain\ValueObject;

abstract class EncryptValueObject
{
    protected $value;

    public function __construct(string $value)
    {
        $valueToEncript = sha1($value);
        $this->value = $valueToEncript;
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
