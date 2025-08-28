@extends('adminlte::page')

@section('title', 'Projects')

@section('content_header')
    <h1 class="font-weight-bold">Projects</h1>
@stop

@section('content')
<div class="container-fluid">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">All Projects</h3>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-outline-primary btn-sm">
                <i class="fas fa-plus mr-1"></i> Create New Project
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th>Project Name</th>
                            <th>Robot</th>
                            <th>Staff</th>
                            <th>Status</th>
                            <th>Assignment Date</th>
                            <th>Completion Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                        <tr>
                            <td>{{ $project->project_name }}</td>
                            <td>{{ $project->robot ? $project->robot->robot_name : 'N/A' }}</td>
                            <td>{{ $project->staff ? $project->staff->name : 'N/A' }}</td>
                            <td>
                                @php
                                    $statusClass = match($project->status) {
                                        'In Progress' => 'badge-primary',
                                        'Completed' => 'badge-success',
                                        default => 'badge-secondary',
                                    };
                                @endphp
                                <span class="badge {{ $statusClass }}">{{ $project->status }}</span>
                            </td>
                            <td>{{ $project->assignment_date }}</td>
                            <td>{{ $project->completion_date ?? 'N/A' }}</td>
                            <td class="text-center">
                                <!-- Use project ID internally for routes -->
                                <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-outline-info btn-sm mr-1">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-outline-warning btn-sm mr-1">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this project?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">No projects found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
