<?php

namespace App\Http\Controllers;
use App\Http\Controllers\QueryException;
use App\Models\Robot;
use Illuminate\Http\Request;

class RobotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $robots = Robot::all();

        return view('admin.project-management.robots', compact('robots'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project-management.create-robot');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'robot_name'          => 'required|string|max:255',
            'charge_level'        => 'nullable|integer|min:0|max:100',
            'paint_level'         => 'nullable|integer|min:0|max:100',
            'robot_status'        => 'required|string|max:50',
            'current_location'    => 'nullable|string|max:255',
            'serial_number'       => 'required|string|unique:robots,serial_number',
            'last_maintenance_date'=> 'nullable|date',
        ]);

        Robot::create($validated);

        return redirect()->route('admin.robots.index')->with('success', 'Robot created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $robot = Robot::findOrFail($id);
        // Fix: Returning the correct view name and passing the robot object.
        return view('admin.project-management.show-robot', compact('robot'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $robot = Robot::findOrFail($id);
        return view('admin.project-management.edit-robot', compact('robot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $robot = Robot::findOrFail($id);

        $validated = $request->validate([
            'robot_name'          => 'required|string|max:255',
            'charge_level'        => 'nullable|integer|min:0|max:100',
            'paint_level'         => 'nullable|integer|min:0|max:100',
            'robot_status'        => 'required|string|max:50',
            'current_location'    => 'nullable|string|max:255',
            'serial_number'       => 'required|string|unique:robots,serial_number,' . $robot->id,
            'last_maintenance_date'=> 'nullable|date',
        ]);

        $robot->update($validated);

        return redirect()->route('admin.robots.index')
                         ->with('success', 'Robot updated successfully!');
    }

    public function destroy(Robot $robot)
{
    $robot->delete();
  }

}
