<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Domain\Criteria;

use MyCoon\Shared\Domain\Criteria\Order;
use MyCoon\Shared\Domain\Criteria\OrderBy;
use MyCoon\Shared\Domain\Criteria\OrderType;

final class OrderMother
{
    public static function create(OrderBy $orderBy, OrderType $orderType): Order
    {
        return new Order($orderBy, $orderType);
    }

    public static function createDesc(string $orderBy): Order
    {
        return Order::createDesc(OrderByMother::create($orderBy));
    }

    public static function none(): Order
    {
        return Order::none();
    }

    public static function random(): Order
    {
        return self::create(OrderByMother::random(), OrderType::random());
    }
}
