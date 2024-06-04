<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Infrastructure\Persistence\Doctrine;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Repository\DocumentRepository;
use MyCoon\Shared\Domain\Aggregate\AggregateRoot;

abstract class DoctrineRepository
{
    private $entityManager;

    public function __construct(DocumentManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    protected function entityManager(): DocumentManager
    {
        return $this->entityManager;
    }

    protected function persist(AggregateRoot $entity): void
    {
        $this->entityManager()->persist($entity);
        $this->entityManager()->flush();
    }

    protected function remove(AggregateRoot $entity): void
    {
        $this->entityManager()->remove($entity);
        $this->entityManager()->flush($entity);
    }

    protected function repository($entityClass): DocumentRepository
    {
        return $this->entityManager->getRepository($entityClass);
    }
}
