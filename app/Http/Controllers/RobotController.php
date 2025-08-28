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
        // Fix: Returning the correct view name
        return view('admin.project-management.create-robot');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Fix: Removed the undefined $id from the unique validation rule.
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

        // Fix: Added the "admin" route prefix.
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
        // Fix: Returning the correct view name and passing the robot object.
        return view('admin.project-management.edit-robot', compact('robot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $robot = Robot::findOrFail($id);

        // Fix: The unique validation rule now correctly ignores the current robot's ID.
        $validated = $request->validate([
            'robot_name'          => 'required|string|max:255',
            'charge_level'        => 'nullable|integer|min:0|max:100',
            'paint_level'         => 'nullable|integer|min:0|max:100',
            'robot_status'        => 'required|string|max:50',
            'current_location'    => 'nullable|string|max:255',
            'serial_number'       => 'required|string|unique:robots,serial_number,' . $robot->id,
            'last_maintenance_date'=> 'nullable|date',
        ]);

        // Fix: Added the update call to save the changes to the database.
        $robot->update($validated);

        return redirect()->route('admin.robots.index')
                         ->with('success', 'Robot updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Robot $robot)
{
    $robot->delete();
    // try {
    //     $robot->delete();
    //     return redirect()->route('admin.robots.index')
    //                      ->with('success', 'Robot deleted successfully!');
    // } catch (QueryException $e) {
    //     if ($e->getCode() == 1451) {
    //         return redirect()->route('admin.robots.index')
    //                          ->with('error', 'Cannot delete this robot because it is related to other records.');
    //     }
    //     throw $e;
  }

}
