<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Domain\ValueObject;

use DateTime;

abstract class DateValueObject
{
    protected $value;

    public function __construct(DateTime $value)
    {
        $this->value = $value;
    }

    public function value(): DateTime
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value();
    }
}
