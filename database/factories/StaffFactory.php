<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    protected $model = Staff::class;

    public function definition(): array
    {
        return [
            'user_id' => null, // nullable
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'job_title' => $this->faker->jobTitle(),
            'role' => $this->faker->randomElement(['Technician', 'Supervisor', 'Manager']),
        ];
    }
}
