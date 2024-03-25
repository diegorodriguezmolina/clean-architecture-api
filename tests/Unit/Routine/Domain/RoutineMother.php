<?php

declare(strict_types=1);

namespace FitnessApi\Tests\Unit\Routine\Domain;

use Faker\Factory;
use FitnessApi\Routine\Domain\Description as Description;
use FitnessApi\Routine\Domain\Id as Id;
use FitnessApi\Routine\Domain\Level as Level;
use FitnessApi\Routine\Domain\Name as Name;
use FitnessApi\Routine\Domain\Routine as Routine;

final class RoutineMother
{
    public static function create(?Id $id, ?Name $name, ?Description $description, ?Level $level): Routine {
        $id = $id ?? Factory::create()->uuid;
        $name = $name ?? Factory::create()->name;
        $description = $description ?? Factory::create()->streetName;
        $level = $level ?? Factory::create()->randomNumber();

        return Routine::create($id, $name, $description, $level);
    }
}
