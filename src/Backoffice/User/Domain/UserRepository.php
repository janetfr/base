<?php

namespace MyCoon\Backoffice\User\Domain;

use MyCoon\Shared\Domain\Criteria\Criteria;

interface UserRepository
{
    public function save(User $user);
    public function search(Criteria $criteria);
    public function findByUserName(string $userName);
    public function getUserByToken(string $token);
    public function findById(string $id) : ?User;
}