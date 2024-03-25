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
        if (is_null($id)){
            $id = Factory::create()->uuid;
        }
        if (is_null($name)){
            $name = Factory::create()->name;
        }
        if (is_null($description)){
            $description = Factory::create()->streetName;
        }
        if (is_null($level)){
            $level = Factory::create()->randomNumber();
        }
        return Routine::create($id, $name, $description, $level);
    }
}
