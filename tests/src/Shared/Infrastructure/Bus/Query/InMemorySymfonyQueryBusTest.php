<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Infrastructure\Bus\Query;

use MyCoon\Shared\Domain\Bus\Query\Query;
use MyCoon\Shared\Infrastructure\Bus\Query\InMemorySymfonyQueryBus;
use MyCoon\Shared\Infrastructure\Bus\Query\QueryNotRegisteredError;
use MyCoon\Tests\Shared\Infrastructure\PhpUnit\UnitTestCase;
use RuntimeException;

final class InMemorySymfonyQueryBusTest extends UnitTestCase
{
    private $queryBus;

    protected function setUp(): void
    {
        parent::setUp();

        $this->queryBus = new InMemorySymfonyQueryBus([$this->queryHandler()]);
    }

    /** @test */
    public function it_should_return_a_response_successfully(): void
    {
        $this->expectException(RuntimeException::class);

        $this->queryBus->ask(new FakeQuery());
    }

    /** @test */
    public function it_should_raise_an_exception_dispatching_a_non_registered_query(): void
    {
        $this->expectException(QueryNotRegisteredError::class);

        $this->queryBus->ask($this->mock(Query::class));
    }

    private function queryHandler()
    {
        return new class
        {
            public function __invoke(FakeQuery $query)
            {
                throw new RuntimeException('This works fine!');
            }
        };
    }
}
