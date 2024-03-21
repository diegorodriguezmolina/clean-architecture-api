<?php

declare(strict_types=1);

namespace FitnessApi\Routine\Domain;

final class Routine
{
    public function __construct(private readonly Id $id, private readonly Name $name, private readonly Description $description, private readonly Level $level) {}

    public static function create(Id $id, Name $name, Description $description, Level $level): self
    {
       return new self($id, $name, $description, $level);
    }

    public function id(): Id
    {
        return $this->id;
    }

    public function name(): Name
    {
        return $this->name;
    }

    public function description(): Description
    {
        return $this->description;
    }

    public function level(): Level
    {
        return $this->level;
    }
}