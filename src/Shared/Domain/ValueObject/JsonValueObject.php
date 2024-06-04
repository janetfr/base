<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Domain\ValueObject;

abstract class JsonValueObject
{
    protected $value;

    public function __construct(array $value)
    {
        $value = json_encode($value);
        $this->value = $value;
    }

    public function value() : array
    {
        return json_decode($this->value, true);
    }

    public function __toString() : string
    {
        return $this->value;
    }
}
