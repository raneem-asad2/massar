<?php

namespace Database\Factories;

use App\Models\Robot;
use Illuminate\Database\Eloquent\Factories\Factory;

class RobotFactory extends Factory
{
    protected $model = Robot::class;

    public function definition(): array
    {
        return [
            'robot_name' => $this->faker->word(),
            'charge_level' => $this->faker->numberBetween(0, 100),
            'paint_level' => $this->faker->numberBetween(0, 100),
            'robot_status' => $this->faker->randomElement(['idle','working','charging']),
            'current_location' => $this->faker->address(),
            'serial_number' => $this->faker->unique()->bothify('SN-#####'),
            'last_maintenance_date' => $this->faker->date(),
        ];
    }
}
