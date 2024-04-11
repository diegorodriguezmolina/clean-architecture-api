<?php

declare(strict_types=1);

namespace FitnessApi\Shared\Domain;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

abstract class UuidValueObject
{
    public function __construct(protected string $value) {}

    public function __toString(): string
    {
        return $this->value;
    }
    public static function random(): string
    {
        return Uuid::uuid4()->toString();
    }

    public function value(): string
    {
        return $this->value;
    }
}
