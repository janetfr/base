<?php

namespace MyCoon\Shared\Infrastructure\Persistence\MongoBD;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Repository\DocumentRepository;
use MyCoon\Shared\Domain\Aggregate\AggregateRoot;

class MongoDBRepository
{
    private DocumentManager $documentManager;

    public function __construct(DocumentManager $documentManager)
    {
        $this->documentManager = $documentManager;
    }

    protected function documentManager(): DocumentManager
    {
        return $this->documentManager;
    }

    protected function persist(AggregateRoot $entity): void
    {
        $this->documentManager()->persist($entity);
        $this->documentManager()->flush();
    }

    protected function remove(AggregateRoot $entity): void
    {
        $this->documentManager()->remove($entity);
        $this->documentManager()->flush();
    }

    protected function repository($entityClass): DocumentRepository
    {
        return $this->documentManager->getRepository($entityClass);
    }
}