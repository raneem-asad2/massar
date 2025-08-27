<?php

namespace Database\Factories;

use App\Models\RoadSegment;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoadSegmentFactory extends Factory
{
    protected $model = RoadSegment::class;

    public function definition(): array
    {
        return [
            'segment_name' => $this->faker->word(),
            'status' => $this->faker->randomElement(['good','needs_repair']),
            'line_type' => $this->faker->randomElement(['solid','dashed']),
            'start_coordinates' => $this->faker->latitude() . ',' . $this->faker->longitude(),
            'end_coordinates' => $this->faker->latitude() . ',' . $this->faker->longitude(),
            'description' => $this->faker->sentence(),
            'project_id' => null, // assign in seeder
        ];
    }
}
