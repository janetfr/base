<?php

declare(strict_types = 1);

namespace MyCoon\Backoffice\Shared\Infrastructure\Doctrine;

use MyCoon\Shared\Infrastructure\Doctrine\DoctrineEntityManagerFactory;
use Doctrine\ORM\EntityManagerInterface;

final class BackofficeEntityManagerFactory
{
    private const SCHEMA_PATH = __DIR__ . '/../../../../../databases/backoffice.sql';

    public static function create(array $parameters, string $environment): EntityManagerInterface
    {
        $isDevMode = 'prod' !== $environment;

        $prefixes = array_merge(
            DoctrinePrefixesSearcher::inPath(__DIR__ . '/../../../../Backoffice', 'MyCoon\Backoffice')
        );

        $dbalCustomTypesClasses = DbalTypesSearcher::inPath(__DIR__ . '/../../../../Backoffice', 'Backoffice');

        return DoctrineEntityManagerFactory::create(
            $parameters,
            $prefixes,
            $isDevMode,
            self::SCHEMA_PATH,
            $dbalCustomTypesClasses
        );
    }
}
