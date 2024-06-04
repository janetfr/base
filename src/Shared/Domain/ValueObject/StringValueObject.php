<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Domain\ValueObject;

abstract class StringValueObject
{
    protected ?string $value;

    public function __construct(string $value = null)
    {
        $this->value = $value;
    }

    public function value(): ?string
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value();
    }
}
