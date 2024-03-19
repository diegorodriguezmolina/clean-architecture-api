<?php

declare(strict_types=1);

namespace FitnessApi\App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

final class HealthCheckController
{
    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse(
            [
                'running' => 'ok',
            ],
        );
    }
}