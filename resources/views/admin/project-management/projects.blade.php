@extends('adminlte::page')

@section('title', 'Projects')

@section('content_header')
    <h1>Projects</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Projects</h3>
        <a href="{{-- route('admin.projects.create') --}}" class="btn btn-primary float-right">Create New Project</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        {{-- These headers now match your database schema exactly --}}
                        <th>Project ID</th>
                        <th>Project Name</th>
                        <th>Robot ID</th>
                        <th>Staff ID</th>
                        <th>Status</th>
                        <th>Assignment Date</th>
                        <th>Completion Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>101</td>
                        <td>Downtown Revitalization</td>
                        <td>1</td>
                        <td>2</td>
                        <td><span class="badge bg-primary">In Progress</span></td>
                        <td>2025-08-01</td>
                        <td>--</td>
                        <td><a href="#" class="btn btn-xs btn-info">Manage</a></td>
                    </tr>
                    <tr>
                        <td>102</td>
                        <td>Airport Corridor Expansion</td>
                        <td>3</td>
                        <td>1</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>2025-07-15</td>
                        <td>2025-08-15</td>
                        <td><a href="#" class="btn btn-xs btn-info">Manage</a></td>
                    </tr>
                    <tr>
                        <td>103</td>
                        <td>Industrial Zone Marking</td>
                        <td>--</td>
                        <td>--</td>
                        <td><span class="badge bg-secondary">Planned</span></td>
                        <td>2025-09-01</td>
                        <td>--</td>
                        <td><a href="#" class="btn btn-xs btn-info">Manage</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop