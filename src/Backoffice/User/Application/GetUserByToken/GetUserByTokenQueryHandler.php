<?php

namespace MyCoon\Backoffice\User\Application\GetUserByToken;

use MyCoon\Backoffice\User\Domain\UserRepository;
use MyCoon\Shared\Domain\Bus\Query\QueryHandler;
use MyCoon\Shared\Domain\Bus\Query\Response;

class GetUserByTokenQueryHandler implements QueryHandler
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(GetUserByTokenQuery $query): Response
    {
        return new GetUserByTokenResponse($this->repository->getUserByToken($query->token()));
    }
}