<?php

declare(strict_types=1);

namespace FitnessApi\Shared\Infrastructure\Mysql;

use Doctrine\ORM\EntityManagerInterface;
use FitnessApi\Shared\Domain\Aggregate\AggregateRoot;

abstract class DoctrineRepository
{
    public function __construct(private readonly EntityManagerInterface $entityManager){}

    protected function entityManager(): EntityManagerInterface
    {
        return $this->entityManager;
    }

    protected function persist(AggregateRoot $entity): void
    {
        $this->entityManager()->persist($entity);
        $this->entityManager()->flush();
    }
}
