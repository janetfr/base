<?php

declare(strict_types = 1);

namespace MyCoon\Shared\Infrastructure\Persistence\Doctrine;

use Doctrine\ODM\MongoDB\Types\StringType;
use MyCoon\Shared\Domain\ValueObject\Uuid;
use MyCoon\Shared\Infrastructure\Doctrine\Dbal\DoctrineCustomType;

abstract class UuidType extends StringType implements DoctrineCustomType
{
    public function getName(): string
    {
        return DoctrineCustomType::customTypeName();
    }

    public function convertToPHPValue($value)
    {
        $className = $this->typeClassName();

        if(is_object($value) && get_class($value) == $className){
            return $value;
        }

        return new $className($value);
    }

    /** @var Uuid $value */
    public function convertToDatabaseValue($value)
    {
        if(is_string($value)){
           return $value;
        }

        return $value->value();
    }

    abstract protected function typeClassName(): string;
}
