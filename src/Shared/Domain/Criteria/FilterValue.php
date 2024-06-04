<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Domain\Criteria;

final class FilterValue
{
    protected $value;

    public function __construct($value = null)
    {
        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value();
    }
}
