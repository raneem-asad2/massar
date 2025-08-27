<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        $assignmentDate = $this->faker->date();
        $completionDate = $this->faker->dateTimeBetween($assignmentDate, '+1 month')->format('Y-m-d');

        return [
            'project_name' => $this->faker->sentence(3),
            'status' => $this->faker->randomElement(['pending','in_progress','completed']),
            'assignment_date' => $assignmentDate,
            'completion_date' => $completionDate,
            'robot_id' => null,  // assign in seeder
            'staff_id' => null,  // assign in seeder
        ];
    }
}
