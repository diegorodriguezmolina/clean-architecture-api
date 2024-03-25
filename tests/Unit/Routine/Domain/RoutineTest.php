<?php

declare(strict_types=1);

namespace FitnessApi\Tests\Unit\Routine\Domain;

use FitnessApi\Routine\Domain\Description as Description;
use FitnessApi\Routine\Domain\Id as Id;
use FitnessApi\Routine\Domain\Level as Level;
use FitnessApi\Routine\Domain\Name as Name;
use FitnessApi\Routine\Domain\Routine as Routine;
use PHPUnit\Framework\TestCase;

class RoutineTest extends TestCase
{
    public function testCreateRoutine()
    {
        $id = new Id('1');
        $name = new Name('My Routine');
        $description = new Description('This is a test routine');
        $level = new Level(1);

        $routine = RoutineMother::create($id, $name, $description, $level);

        $this->assertInstanceOf(Routine::class, $routine);
        $this->assertSame($id, $routine->id());
        $this->assertSame($name, $routine->name());
        $this->assertSame($description, $routine->description());
        $this->assertSame($level, $routine->level());
    }
}