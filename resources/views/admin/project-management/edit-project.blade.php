@extends('adminlte::page')

@section('title', 'Edit Project')

@section('content_header')
    <h1>Edit Project</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Project Details</h3>
        </div>
        <form action="{{ route('admin.projects.update', $project['project_id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="project_name">Project Name</label>
                    <input type="text" name="project_name" id="project_name" class="form-control @error('project_name') is-invalid @enderror" value="{{ old('project_name', $project['project_name']) }}" required>
                    @error('project_name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="robot_id">Robot ID</label>
                    <input type="number" name="robot_id" id="robot_id" class="form-control @error('robot_id') is-invalid @enderror" value="{{ old('robot_id', $project['robot_id']) }}">
                    @error('robot_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="staff_id">Staff ID</label>
                    <input type="number" name="staff_id" id="staff_id" class="form-control @error('staff_id') is-invalid @enderror" value="{{ old('staff_id', $project['staff_id']) }}">
                    @error('staff_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                        <option value="Planned" {{ old('status', $project['status']) == 'Planned' ? 'selected' : '' }}>Planned</option>
                        <option value="In Progress" {{ old('status', $project['status']) == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="Completed" {{ old('status', $project['status']) == 'Completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                    @error('status')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="assignment_date">Assignment Date</label>
                    <input type="date" name="assignment_date" id="assignment_date" class="form-control @error('assignment_date') is-invalid @enderror" value="{{ old('assignment_date', $project['assignment_date']) }}" required>
                    @error('assignment_date')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="completion_date">Completion Date</label>
                    <input type="date" name="completion_date" id="completion_date" class="form-control @error('completion_date') is-invalid @enderror" value="{{ old('completion_date', $project['completion_date']) }}">
                    @error('completion_date')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@stop