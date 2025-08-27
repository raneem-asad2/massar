<?php

namespace Database\Factories;

use App\Models\MaintenanceRecord;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaintenanceRecordFactory extends Factory
{
    protected $model = MaintenanceRecord::class;

    public function definition(): array
    {
        return [
            'maintenance_date' => $this->faker->date(),
            'description' => $this->faker->sentence(),
            'cost' => $this->faker->numberBetween(50, 500),
            'robot_id' => null,  // assign in seeder
            'staff_id' => null,  // assign in seeder
        ];
    }
}
