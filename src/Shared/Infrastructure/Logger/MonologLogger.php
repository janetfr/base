<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Infrastructure\Logger;

use MyCoon\Shared\Domain\Logger;

final class MonologLogger implements Logger
{
    private $logger;

    public function __construct(\Monolog\Logger $logger)
    {
        $this->logger = $logger;
    }

    public function info(string $message, array $context = []): void
    {
        $this->logger->info($message, $context);
    }

    public function warning(string $message, array $context = []): void
    {
        $this->logger->warning($message, $context);
    }

    public function critical(string $message, array $context = []): void
    {
        $this->logger->critical($message, $context);
    }
}
