<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Domain\Criteria;

final class Criteria
{
    private $filters;
    private $order;
    private $offset;
    private $limit;
    private $type;

    public function __construct(Filters $filters, Order $order, ?int $offset, ?int $limit, string $type = "AND")
    {
        $this->filters = $filters;
        $this->order   = $order;
        $this->offset  = $offset;
        $this->limit   = $limit;
        $this->type = $type;
    }

    public function hasFilters(): bool
    {
        return $this->filters->count() > 0;
    }

    public function hasOrder(): bool
    {
        return !$this->order->isNone();
    }

    public function plainFilters(): array
    {
        return $this->filters->filters();
    }

    public function filters(): Filters
    {
        return $this->filters;
    }

    public function order(): Order
    {
        return $this->order;
    }

    public function offset(): ?int
    {
        return $this->offset;
    }

    public function limit(): ?int
    {
        return $this->limit;
    }

    public function serialize(): string
    {
        return sprintf(
            '%s~~%s~~%s~~%s',
            $this->filters->serialize(),
            $this->order->serialize(),
            $this->offset,
            $this->limit
        );
    }

    public function type(): ?string
    {
        return $this->type;
    }
}
