<?php

namespace Database\Factories;

use App\Models\StreetDefect;
use Illuminate\Database\Eloquent\Factories\Factory;

class StreetDefectFactory extends Factory
{
    protected $model = StreetDefect::class;

    public function definition(): array
    {
        return [
            'defect_type' => $this->faker->randomElement(['pothole','crack','faded_line']),
            'location' => $this->faker->address(),
            'image' => $this->faker->imageUrl(640, 480),
            'status' => $this->faker->randomElement(['reported','fixed']),
            'segment_id' => null, // assign in seeder
        ];
    }
}
