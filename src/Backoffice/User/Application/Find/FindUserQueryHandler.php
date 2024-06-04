<?php

namespace MyCoon\Backoffice\User\Application\Find;

use MyCoon\Backoffice\User\Domain\UserRepository;
use MyCoon\Shared\Domain\Bus\Query\QueryHandler;

class FindUserQueryHandler implements QueryHandler
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(FindUserQuery $query)
    {
        return $this->repository->findById($query->id());
    }
}