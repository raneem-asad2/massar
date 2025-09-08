<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceRecord;
use App\Models\Staff;
use App\Models\Robot;
use Illuminate\Http\Request;

class MaintenanceRecordController extends Controller
{
    public function index()
    {
        $records = MaintenanceRecord::with(['staff', 'robot'])->get();
        return view('admin.project-management.maintenance-records', compact('records'));
    }

    public function create()
    {
        $staff = Staff::all();
        $robots = Robot::all();
        return view('admin.project-management.create-maintenance-records', compact('staff', 'robots'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'staff_id' => 'required|exists:staff,id',
            'robot_id' => 'required|exists:robots,id',
            'maintenance_date' => 'required|date',
            'description' => 'required|string|max:255',
            'cost' => 'required|numeric|min:0',
        ]);

        MaintenanceRecord::create($validated);

        return redirect()->route('admin.maintenance-records.index')
                         ->with('success', 'Maintenance record created successfully.');
    }

    public function show(MaintenanceRecord $maintenanceRecord)
    {
        return view('admin.project-management.show-maintenance-records', compact('maintenanceRecord'));
    }

    public function edit(MaintenanceRecord $maintenanceRecord)
    {
        $staff = Staff::all();
        $robots = Robot::all();
        return view('admin.project-management.edit-maintenance-records', compact('maintenanceRecord', 'staff', 'robots'));
    }

    public function update(Request $request, MaintenanceRecord $maintenanceRecord)
    {
        $validated = $request->validate([
            'staff_id' => 'required|exists:staff,id',
            'robot_id' => 'required|exists:robots,id',
            'maintenance_date' => 'required|date',
            'description' => 'required|string|max:255',
            'cost' => 'required|numeric|min:0',
        ]);

        $maintenanceRecord->update($validated);

        return redirect()->route('admin.maintenance-records.index')
                         ->with('success', 'Maintenance record updated successfully.');
    }

    public function destroy(MaintenanceRecord $maintenanceRecord)
    {
        $maintenanceRecord->delete();

        return redirect()->route('admin.maintenance-records.index')
                         ->with('success', 'Maintenance record deleted successfully.');
    }
}
