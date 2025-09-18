<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staff;
use App\Models\Robot;
use App\Models\Project;
use App\Models\RoadSegment;
use App\Models\MaintenanceRecord;
use App\Models\StreetDefect;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([RoleSeeder::class]);

        $staff = Staff::factory(5)->create();
        
        $robots = Robot::factory(5)->create()->each(function ($robot) {
        $lat = fake()->latitude(31.9, 32.1);
        $lng = fake()->longitude(35.8, 36.0);

        $robot->update([
            'current_location' => "{$lat},{$lng}", // stored as "lat,lng"
        ]);
    });

        $projects = Project::factory(10)->state(function () use ($robots, $staff) {
            return [
                'robot_id' => $robots->random()->id,
                'staff_id' => $staff->random()->id,
            ];
        })->create();

        $segments = RoadSegment::factory(20)->state(function () use ($projects) {
            return [
                'project_id' => $projects->random()->id,
            ];
        })->create();

        MaintenanceRecord::factory(15)->state(function () use ($robots, $staff) {
            return [
                'robot_id' => $robots->random()->id,
                'staff_id' => $staff->random()->id,
            ];
        })->create();

        StreetDefect::factory(30)->state(function () use ($segments) {
            return [
                'segment_id' => $segments->random()->id,
            ];
        })->create();
    }
}
