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

// public function systemAlerts()
// {
//     $projects = Project::with('robot')->get();

//     $systemAlerts = [];

//     foreach ($projects as $project) {
//         if (!$project->robot) {
//             continue; 
//         }

//         $level = 'medium';
//         if ($project->robot->charge_level < 20) {
//             $level = 'critical';
//         } elseif ($project->robot->paint_level < 20) {
//             $level = 'high';
//         } elseif ($project->status === 'delayed') {
//             $level = 'high';
//         }

//         $systemAlerts[] = [
//             'robot_id' => $project->robot->robot_name,
//             'title' => $project->project_name,
//             'details' => "Charge: {$project->robot->charge_level}%, Paint: {$project->robot->paint_level}%, Status: {$project->robot->robot_status}",
//             'level' => $level,
//             'icon' => 'bi bi-exclamation-triangle-fill', 
//         ];
//     }

//     return view('dashboard', compact('systemAlerts'));
// }

public function destroy(Project $project)
{
    try {
        $project->delete();
        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project deleted successfully.');
    } catch (\Exception $e) {
        return redirect()
            ->route('admin.projects.index')
            ->with('error', 'Failed to delete the project. Please try again.');
    }
}
}
