<?php

namespace App\Http\Controllers;

use App\Models\Robot;
use App\Models\Project;
use App\Models\RoadSegment;
use App\Models\StreetDefect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class RobotDataController extends Controller
{
public function importFromS3($filename)
{
    // Build the correct path
    $path = "robot-data/" . $filename;

    // Check if file exists
    if (!Storage::disk('s3')->exists($path)) {
        return response()->json(['message' => "File not found on S3: $path"], 404);
    }

    // Read file
    $jsonString = Storage::disk('s3')->get($path);
    $data = json_decode($jsonString, true);

    if (!isset($data['robot'])) {
        return response()->json(['message' => 'Invalid JSON structure'], 400);
    }

    $robotData = $data['robot'];

    // Save Robot
    $robot = Robot::updateOrCreate(
        ['serial_number' => $robotData['serial_number']],
        [
            'robot_name' => $robotData['robot_name'],
            'charge_level' => $robotData['charge_level'],
            'paint_level' => $robotData['paint_level'],
            'robot_status' => $robotData['robot_status'],
            'current_location' => $robotData['current_location'],
            'last_maintenance_date' => $robotData['last_maintenance_date'],
        ]
    );

    // Save Projects, Road Segments, Street Defects
    if (isset($robotData['projects'])) {
        foreach ($robotData['projects'] as $projData) {
            $project = Project::updateOrCreate(
                ['project_name' => $projData['project_name'], 'robot_id' => $robot->id],
                [
                    'status' => $projData['status'],
                    'assignment_date' => $projData['assignment_date'],
                    'completion_date' => $projData['completion_date'] ?? null,
                    'staff_id' => null,
                ]
            );

            if (isset($projData['road_segments'])) {
                foreach ($projData['road_segments'] as $segData) {
                    $segment = RoadSegment::updateOrCreate(
                        ['segment_name' => $segData['segment_name'], 'project_id' => $project->id],
                        [
                            'status' => $segData['status'],
                            'line_type' => $segData['line_type'],
                            'start_coordinates' => $segData['start_coordinates'],
                            'end_coordinates' => $segData['end_coordinates'],
                            'description' => $segData['description'],
                        ]
                    );

                    if (isset($segData['street_defects'])) {
                        foreach ($segData['street_defects'] as $defectData) {
                            StreetDefect::updateOrCreate(
                                ['location' => $defectData['location'], 'segment_id' => $segment->id],
                                [
                                    'defect_type' => $defectData['defect_type'],
                                    'status' => $defectData['status'],
                                    'image' => $defectData['image'] ?? null,
                                ]
                            );
                        }
                    }
                }
            }
        }
    }

    return response()->json([
        'message' => 'Data imported successfully from S3',
        'robot'   => $robot,
    ]);
}





public function importLocalJson()
{
    $path = storage_path('app/test-json/robot_sample.json');

    if (!file_exists($path)) {
        return response()->json(['message' => 'File not found'], 404);
    }

    $jsonString = file_get_contents($path);
    $data = json_decode($jsonString, true);

    if (!isset($data['robot'])) {
        return response()->json(['message' => 'Invalid JSON structure'], 400);
    }

    $robotData = $data['robot'];

    // Save Robot
    $robot = Robot::updateOrCreate(
        ['serial_number' => $robotData['serial_number']],
        [
            'robot_name' => $robotData['robot_name'],
            'charge_level' => $robotData['charge_level'],
            'paint_level' => $robotData['paint_level'],
            'robot_status' => $robotData['robot_status'],
            'current_location' => $robotData['current_location'],
            'last_maintenance_date' => $robotData['last_maintenance_date'],
        ]
    );

    // Save Projects, Road Segments, and Street Defects
    if (isset($robotData['projects'])) {
        foreach ($robotData['projects'] as $projData) {
            $project = Project::updateOrCreate(
                ['project_name' => $projData['project_name'], 'robot_id' => $robot->id],
                [
                    'status' => $projData['status'],
                    'assignment_date' => $projData['assignment_date'],
                    'completion_date' => $projData['completion_date'],
                    'staff_id' => null,
                ]
            );

            if (isset($projData['road_segments'])) {
                foreach ($projData['road_segments'] as $segData) {
                    $segment = RoadSegment::updateOrCreate(
                        ['segment_name' => $segData['segment_name'], 'project_id' => $project->id],
                        [
                            'status' => $segData['status'],
                            'line_type' => $segData['line_type'],
                            'start_coordinates' => $segData['start_coordinates'],
                            'end_coordinates' => $segData['end_coordinates'],
                            'description' => $segData['description'],
                        ]
                    );

                    if (isset($segData['street_defects'])) {
                        foreach ($segData['street_defects'] as $defectData) {
                            StreetDefect::updateOrCreate(
                                [
                                    'location' => $defectData['location'],
                                    'segment_id' => $segment->id,
                                ],
                                [
                                    'defect_type' => $defectData['defect_type'],
                                    'status' => $defectData['status'],
                                    'image' => $defectData['image'] ?? null,
                                ]
                            );
                        }
                    }
                }
            }
        }
    }

    return response()->json([
        'message' => 'Data imported successfully',
        'robot' => $robot
    ]);
}


}
