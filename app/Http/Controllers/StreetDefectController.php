<?php

namespace App\Http\Controllers;

use App\Models\StreetDefect;
use App\Models\RoadSegment;
use Illuminate\Http\Request;

class StreetDefectController extends Controller
{
    public function index()
    {
        $defects = StreetDefect::all();
        return view('admin.project-management.street-defects', compact('defects'));
    }

    public function create()
    {
        $segments = RoadSegment::all();
        return view('admin.project-management.create-street-defects', compact('segments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'defect_type' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'status' => 'required|string|max:255',
            'segment_id' => 'nullable|exists:road_segments,id',
        ]);

        StreetDefect::create($request->all());
        return redirect()->route('admin.street_defects.index')->with('success', 'Street defect created.');
    }

    public function show(StreetDefect $streetDefect)
    {
        return view('admin.project-management.show-street-defects', compact('streetDefect'));
    }

    public function edit(StreetDefect $streetDefect)
    {
        $segments = RoadSegment::all();
        return view('admin.project-management.edit-street-defects', compact('streetDefect', 'segments'));
    }

    public function update(Request $request, StreetDefect $streetDefect)
    {
        $request->validate([
            'defect_type' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'status' => 'required|string|max:255',
            'segment_id' => 'nullable|exists:road_segments,id',
        ]);

        $streetDefect->update($request->all());
        return redirect()->route('admin.street-defects.index')->with('success', 'Street defect updated.');
    }

    public function destroy(StreetDefect $streetDefect)
    {
        $streetDefect->delete();
        return redirect()->route('admin.street-defects.index')->with('success', 'Street defect deleted.');
    }
}
