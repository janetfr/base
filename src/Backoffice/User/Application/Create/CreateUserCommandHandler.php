<?php

namespace MyCoon\Backoffice\User\Application\Create;

use MyCoon\Shared\Domain\Bus\Command\CommandHandler;
use MyCoon\Backoffice\User\Domain\User;
use MyCoon\Backoffice\User\Domain\UserRepository;
use MyCoon\Shared\Domain\Bus\Event\EventBus;

class CreateUserCommandHandler implements CommandHandler
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository, EventBus $bus)
    {
        $this->repository = $repository;
        $this->bus = $bus;
    }

    public function __invoke(CreateUserCommand $command)
    {
        $user = User::basic(
            $command->id(),
            $command->username(),
            sha1($command->password()),
            sha1($command->username() . $command->password() . "6rgbz0mES7")
        );

        $this->repository->save($user);

        //$this->bus->publish(...$user->pullDomainEvents());
    }
}