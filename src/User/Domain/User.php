<?php

declare(strict_types=1);

namespace FitnessApi\User\Domain;

use FitnessApi\Shared\Domain\Aggregate\AggregateRoot;

final class User extends AggregateRoot
{
    public function __construct(private readonly Name $name)
    {
        parent::__construct();
    }

    public static function create(Name $name): self
    {
        return new self($name);
    }

    public function name(): Name
    {
        return $this->name;
    }
}
