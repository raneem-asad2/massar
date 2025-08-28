<?php

namespace App\Http\Controllers;
use App\Models\StreetDefect;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
{
    $projects = Project::with(['robot', 'staff'])->get();
    return view('admin.project-management.projects', compact('projects'));
}

public function create()
{
    return view('admin.project-management.create-project');
}

public function show(Project $project)
{
    $project->load(['robot', 'staff', 'roadSegments']);

    $streetDefects = StreetDefect::whereIn(
        'segment_id',
        $project->roadSegments->pluck('id')
    )->get();

    return view('admin.project-management.show-project', compact('project', 'streetDefects'));
}


public function edit(Project $project)
{
    return view('admin.project-management.edit-project', compact('project'));
}
}
