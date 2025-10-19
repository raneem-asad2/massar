<?php

namespace App\Http\Controllers;

use App\Models\Robot;
use App\Models\Project;
use App\Models\RoadSegment;
use App\Models\StreetDefect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class RobotDataController extends Controller
{
public function index(){
    $robots=Robot::with([
        'Projects.RoadSegment.StreetDefect'
    ])->get();

    return response()->json([
        'message'=>'Robot sata fetched successfully from RDS',
        'robots'=>$robots,
    ]);
}

public function show($id){
    $robot=Robot::with([
        'Projects.RoadSegment.StreetDefect'
    ])->find($id);

    if(!$robot){
        return response()->json([
            'message'=>'Robot Not Found'],404);
    }
    return response()->json([
            'message' => 'Robot data fetched successfully',
            'robot' => $robot,
        ]);
}

public function store(Request $request)
{
    $validated = $request->validate([
        'serial_number' => 'required|unique:robots',
        'robot_name' => 'required|string',
        'charge_level' => 'required|numeric',
        'paint_level' => 'required|numeric',
        'robot_status' => 'required|string',
        'current_location' => 'nullable|string',
        'last_maintenance_date' => 'nullable|date',
    ]);

    $robot = \App\Models\Robot::create($validated);

    return response()->json([
        'message' => 'Robot created successfully',
        'robot' => $robot
    ], 201);
}
}