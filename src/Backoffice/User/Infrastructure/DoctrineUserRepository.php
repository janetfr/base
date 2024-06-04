<?php

namespace MyCoon\Backoffice\User\Infrastructure;

use MyCoon\Backoffice\User\Domain\User;
use MyCoon\Shared\Domain\Criteria\Criteria;
use MyCoon\Shared\Infrastructure\Persistence\Doctrine\DoctrineCriteriaConverter;
use MyCoon\Backoffice\User\Domain\UserRepository;
use MyCoon\Shared\Infrastructure\Persistence\MongoBD\MongoDBRepository;

class DoctrineUserRepository extends MongoDBRepository implements UserRepository
{
    public function save(User $user)
    {
        $this->persist($user);
    }

    public function getUserByToken(string $token)
    {
        return $this->repository(User::class)->findOneBy(["token" => $token]);
    }

    public function search(Criteria $criteria)
    {
        $doctrineCriteria = DoctrineCriteriaConverter::convert($criteria);

        return $this->repository(User::class)->matching($doctrineCriteria)->toArray();
    }

    public function findByUserName(string $userName)
    {
        return $this->repository(User::class)->findOneBy(["username" => $userName]);
    }

    public function findById(string $id) : ?User
    {
        return $this->repository(User::class)->find($id);
    }
}