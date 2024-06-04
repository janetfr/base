<?php

declare(strict_types = 1);

namespace MyCoon\Backoffice\Shared\Infrastructure\Doctrine;

use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use MyCoon\Shared\Infrastructure\Doctrine\Dbal\DbalCustomTypesRegistrar;

final class BackofficeDocumentManagerFactory
{
    private const SCHEMA_PATH = __DIR__ . '/../../../../../databases/backoffice.sql';

    public static function create(array $parameters, string $environment): DocumentManager
    {
        $isDevMode = 'prod' !== $environment;

        $prefixes = array_merge(
            DoctrinePrefixesSearcher::inPath(__DIR__ . '/../../../../Backoffice', 'MyCoon\Backoffice')
        );

        $configuration = new Configuration();
        $configuration->setAutoGenerateProxyClasses(Configuration::AUTOGENERATE_FILE_NOT_EXISTS);
        $configuration->setProxyDir(sys_get_temp_dir());
        $configuration->setHydratorDir(sys_get_temp_dir());
        $configuration->setProxyNamespace('SymfonyTests\Doctrine');
        $configuration->setHydratorNamespace('SymfonyTests\Doctrine');
        $configuration->setDefaultDB($parameters["dbname"]);

        $driver = new \Doctrine\ODM\MongoDB\Mapping\Driver\SimplifiedXmlDriver($prefixes);
        $configuration->setMetadataDriverImpl($driver);

        $driver->setGlobalBasename('global');


        $conn = new \MongoDB\Client($parameters["host"]);

        $dbalCustomTypesClasses = DbalTypesSearcher::inPath(__DIR__ . '/../../../../Backoffice', 'Backoffice');
        DbalCustomTypesRegistrar::register($dbalCustomTypesClasses);

        return DocumentManager::create($conn, $configuration);
    }
}
