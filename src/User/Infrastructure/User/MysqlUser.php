<?php

namespace FitnessApi\User\Infrastructure\User;

use Doctrine\ORM\Mapping as ORM;

final class MysqlUser
{
    private ?string $id = null;

    private ?string $name = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
