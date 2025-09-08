<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of staff.
     */
    public function index()
    {
        $staff = Staff::all();
        return view('admin.users.staff', compact('staff'));
    }

    /**
     * Show the form for creating a new staff member.
     */
    public function create()
    {
        return view('admin.users.create-staff');
    }

    /**
     * Store a newly created staff member.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:staff,email',
            'phone' => 'required|string|max:20',
            'job_title' => 'required|string|max:255',
            'role' => 'nullable|string|max:255',
        ]);

        Staff::create($request->all());

        return redirect()->route('admin.staff.index')->with('success', 'Staff created successfully.');
    }

    /**
     * Display the specified staff member.
     */
    public function show(Staff $staff)
    {
        return view('admin.users.show-staff', compact('staff'));
    }

    /**
     * Show the form for editing the specified staff member.
     */
    public function edit(Staff $staff)
    {
        return view('admin.users.edit-staff', compact('staff'));
    }

    /**
     * Update the specified staff member.
     */
    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:staff,email,' . $staff->id,
            'phone' => 'sometimes|required|string|max:20',
            'job_title' => 'sometimes|required|string|max:255',
            'role' => 'nullable|string|max:255',
        ]);

        $staff->update($request->all());

        return redirect()->route('admin.users.show-staff')->with('success', 'Staff updated successfully.');
    }

    /**
     * Remove the specified staff member.
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('admin.users.show-staff')->with('success', 'Staff deleted successfully.');
    }
}
