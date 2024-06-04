<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Domain\ValueObject;

abstract class IntValueObject
{
    protected ?int $value;

    public function __construct(int $value = null)
    {
        $this->value = $value;
    }

    public function value(): ?int
    {
        return $this->value;
    }

    public function __toString()
    {
        return (string) $this->value();
    }
}
