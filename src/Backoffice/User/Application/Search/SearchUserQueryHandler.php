<?php

namespace MyCoon\Backoffice\User\Application\Search;

use MyCoon\Backoffice\User\Domain\UserRepository;
use MyCoon\Backoffice\User\Domain\UserResponse;
use MyCoon\Shared\Domain\Bus\Query\QueryHandler;
use MyCoon\Shared\Domain\Criteria\Criteria;
use MyCoon\Shared\Domain\Criteria\Filters;
use MyCoon\Shared\Domain\Criteria\Order;
use function Lambdish\Phunctional\apply;

class SearchUserQueryHandler implements QueryHandler
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(SearchUserQuery $query)
    {
        $filters = Filters::fromValues($query->filters());

        $order = Order::fromValues($query->orderBy(), $query->order());

        $limit = $query->limit();
        $offset = $query->offset();

        $criteria = new Criteria($filters, $order, $offset, $limit);

        $data = $this->repository->search($criteria);

        $response = [];
        foreach ($data as $value){
            $response[] = new UserResponse($value);
        }

        return $response;
    }
}