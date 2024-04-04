<?php

declare(strict_types=1);

namespace FitnessApi\User\Domain;

interface UserRepository
{
    public function create(User $user): void;
}
