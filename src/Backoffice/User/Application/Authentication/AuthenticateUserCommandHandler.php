<?php

namespace MyCoon\Backoffice\User\Application\Authentication;

use Symfony\Component\HttpFoundation\Response;
use MyCoon\Backoffice\User\Domain\UserRepository;
use MyCoon\Shared\Domain\Bus\Command\CommandHandler;
use \Exception as Exception;
use MyCoon\Shared\Domain\Criteria\Criteria;
use MyCoon\Shared\Domain\Criteria\Filters;
use MyCoon\Shared\Domain\Criteria\Order;

class AuthenticateUserCommandHandler implements CommandHandler
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @throws Exception
     */
    public function __invoke(AuthenticateUserCommand $command)
    {
        if(empty($command->user())){
            throw new Exception("Invalid User", Response::HTTP_BAD_REQUEST);
        }

        if(empty($command->password())){
            throw new Exception("Invalid Password", Response::HTTP_BAD_REQUEST);
        }

        $filters[] = [
            "value" => $command->user(),
            "operator" => "=",
            "field" => "username"
        ];

        $filters[] = [
            "value" => $command->password(),
            "operator" => "=",
            "field" => "password"
        ];

        $filters = Filters::fromValues($filters);
        $order = Order::fromValues(null,null);

        $criteria = new Criteria($filters, $order, null, null);

        $result = $this->repository->search($criteria);

        if(empty($result[0])){
            throw new Exception("Invalid Login", Response::HTTP_BAD_REQUEST);
        }
    }
}