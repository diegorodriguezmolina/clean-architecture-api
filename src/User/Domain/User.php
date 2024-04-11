<?php

declare(strict_types=1);

namespace FitnessApi\User\Domain;

use FitnessApi\Shared\Domain\Aggregate\AggregateRoot;

final class User extends AggregateRoot
{
    public function __construct(private readonly Id $id, private readonly Name $name)
    {
        parent::__construct();
    }

    public static function create(Name $name): self
    {
        return new self(new Id(Id::random()), $name);
    }

    public function id(): Id
    {
        return $this->id;
    }

    public function name(): Name
    {
        return $this->name;
    }
}
