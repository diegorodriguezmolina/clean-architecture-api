<?php

declare(strict_types=1);

namespace FitnessApi\User\Application;

use FitnessApi\User\Domain\Name;
use FitnessApi\User\Domain\User;
use FitnessApi\User\Domain\UserRepository;

final class CreateUserUseCase
{
    public function __construct(private readonly UserRepository $userRepository){}

    public function execute(string $name): void
    {
        $this->userRepository->create(User::create(new Name($name)));
    }
}
