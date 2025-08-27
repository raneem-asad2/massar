<?php

namespace App\Http\Controllers;

use App\Models\Robot;
use Illuminate\Http\Request;

class RobotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $robots=Robot::all();

        return view('admin.project-management.robots');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
        'robot_name'           => 'required|string|max:255',
        'charge_level'         => 'nullable|integer|min:0|max:100',
        'paint_level'          => 'nullable|integer|min:0|max:100',
        'robot_status'         => 'required|string|max:50',
        'current_location'     => 'nullable|string|max:255',
        'serial_number'        => 'required|string|unique:robots,serial_number,' . $id,
        'last_maintenance_date'=> 'nullable|date',
        ]);

       Robot::create($validated);

       return redirect()->route('robots.index')->with('success','robot created successfulle!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $robot=Robot::findOrFail($id);
        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $robot = Robot::findOrFail($id);
        return view('');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $robot = Robot::findOrFail($id);
         
        $validated = $request->validate([
        'robot_name'           => 'required|string|max:255',
        'charge_level'         => 'nullable|integer|min:0|max:100',
        'paint_level'          => 'nullable|integer|min:0|max:100',
        'robot_status'         => 'required|string|max:50',
        'current_location'     => 'nullable|string|max:255',
        'serial_number'        => 'required|string|unique:robots,serial_number,' . $id,
        'last_maintenance_date'=> 'nullable|date',
        ]);
       return redirect()->route('admin.robots.index')
                         ->with('success', 'Robot updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $robot = Robot::findOrFail($id);
        $robot->delete();

        return redirect()->route('robots.index')
                         ->with('success', 'Robot deleted successfully!');
    }
}
