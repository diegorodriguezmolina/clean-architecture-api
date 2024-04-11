<?php

declare(strict_types=1);

namespace FitnessApi\App\Controller\User;

use FitnessApi\User\Application\CreateUserUseCase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

const NAME = "name";

final class CreateUserController
{
    public function __construct(private readonly CreateUserUseCase $createUserUseCase){}

    public function __invoke(Request $request): JsonResponse
    {
        $this->createUserUseCase->execute($request->get(NAME));

        return new JsonResponse(
            [
                'created' => 'ok',
            ],
        );
    }
}
