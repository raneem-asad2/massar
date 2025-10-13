<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
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

   
    public function create()
    {
        return view('admin.project-management.create-robot');
    }

   
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

  
    public function show(string $id)
    {
        $robot = Robot::with('projects.roadSegments')->findOrFail($id);
        return view('admin.project-management.show-robot', compact('robot'));
    }

 
    public function edit(string $id)
    {
        $robot = Robot::findOrFail($id);
        return view('admin.project-management.edit-robot', compact('robot'));
    }

    
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
    try {
        $robot->delete();
        return redirect()->route('admin.robots.index')->with('success', 'Robot deleted successfully!');
    } catch (QueryException $e) {
        return redirect()->route('admin.robots.index')->with('error', 'Cannot delete robot because it is linked to one or more projects.');
    }
}

}
