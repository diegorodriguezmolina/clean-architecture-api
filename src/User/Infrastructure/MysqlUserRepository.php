<?php

declare(strict_types=1);

namespace FitnessApi\User\Application;

use FitnessApi\Shared\Domain\Aggregate\AggregateRoot;
use FitnessApi\Shared\Infrastructure\Mysql\DoctrineRepository;
use FitnessApi\User\Domain\Name;
use FitnessApi\User\Domain\User;
use FitnessApi\User\Domain\UserRepository;

final class MysqlUserRepository extends DoctrineRepository implements UserRepository
{
    public function create(User $user): void
    {
        $this->persist($user);
    }
}
