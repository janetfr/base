<?php

declare(strict_types = 1);

namespace MyCoon\Tests\Shared\Infrastructure\Doctrine;

use Doctrine\ODM\MongoDB\DocumentManager;

final class DatabaseCleaner
{
    public function __invoke(DocumentManager $documentManager)
    {
        $schemaManager = $documentManager->getSchemaManager();
        $schemaManager->dropCollections();
    }

    /*private function truncateDatabaseSql(array $tables): string
    {
        $truncateTables = map($this->truncateTableSql(), $tables);

        return sprintf('SET FOREIGN_KEY_CHECKS = 0; %s SET FOREIGN_KEY_CHECKS = 1;', implode(' ', $truncateTables));
    }*/

    /*private function truncateTableSql(): callable
    {
        return function (array $table): string {
            return sprintf('TRUNCATE TABLE `%s`;', first($table));
        };
    }*/

    /*private function tables(Connection $connection): array
    {
        return $connection->query('SHOW TABLES')->fetchAll();
    }*/
}
