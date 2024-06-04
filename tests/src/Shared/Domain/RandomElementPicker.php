<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Domain;

use MyCoon\Tests\Shared\Domain\MotherCreator;

final class RandomElementPicker
{
    public static function from(...$elements)
    {
        return MotherCreator::random()->randomElement($elements);
    }
}
