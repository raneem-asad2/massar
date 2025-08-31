<?php

namespace App\Http\Controllers;

use App\Models\RoadSegment;
use App\Models\Project;
use Illuminate\Http\Request;

class RoadSegmentController extends Controller
{
    public function index()
    {
        $segments = RoadSegment::all();
        return view('road_segments.index', compact('segments'));
    }

    public function create()
    {
        $projects = Project::all();
        return view('road_segments.create', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'segment_name' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'line_type' => 'required|string|max:255',
            'start_coordinates' => 'required|string|max:255',
            'end_coordinates' => 'required|string|max:255',
            'description' => 'nullable|string',
            'project_id' => 'nullable|exists:projects,id',
        ]);

        RoadSegment::create($request->all());
        return redirect()->route('road-segments.index')->with('success', 'Road segment created.');
    }

    public function show(RoadSegment $roadSegment)
    {
        return view('road_segments.show', compact('roadSegment'));
    }

    public function edit(RoadSegment $roadSegment)
    {
        $projects = Project::all();
        return view('road_segments.edit', compact('roadSegment', 'projects'));
    }

    public function update(Request $request, RoadSegment $roadSegment)
    {
        $request->validate([
            'segment_name' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'line_type' => 'required|string|max:255',
            'start_coordinates' => 'required|string|max:255',
            'end_coordinates' => 'required|string|max:255',
            'description' => 'nullable|string',
            'project_id' => 'nullable|exists:projects,id',
        ]);

        $roadSegment->update($request->all());
        return redirect()->route('road-segments.index')->with('success', 'Road segment updated.');
    }

    public function destroy(RoadSegment $roadSegment)
    {
        $roadSegment->delete();
        return redirect()->route('road-segments.index')->with('success', 'Road segment deleted.');
    }
}
