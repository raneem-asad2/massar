@extends('adminlte::page')

@section('title', 'Edit Robot')

@section('content_header')
    <h1>Edit Robot</h1>
@stop

@section('content')
<div class="card shadow-sm border-0 rounded-4">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0">Edit Robot Details</h3>
    </div>
    <form action="{{ route('admin.robots.update', $robot->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="robot_name" class="form-label">Robot Name</label>
                    <input type="text" name="robot_name" id="robot_name" class="form-control @error('robot_name') is-invalid @enderror" value="{{ old('robot_name', $robot->robot_name) }}" required>
                    @error('robot_name') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label for="serial_number" class="form-label">Serial Number</label>
                    <input type="text" name="serial_number" id="serial_number" class="form-control @error('serial_number') is-invalid @enderror" value="{{ old('serial_number', $robot->serial_number) }}" required>
                    @error('serial_number') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label for="robot_status" class="form-label">Status</label>
                    <select name="robot_status" id="robot_status" class="form-control @error('robot_status') is-invalid @enderror" required>
                        <option value="">Select Status</option>
                        <option value="Operational" {{ old('robot_status', $robot->robot_status) == 'Operational' ? 'selected' : '' }}>Operational</option>
                        <option value="Charging" {{ old('robot_status', $robot->robot_status) == 'Charging' ? 'selected' : '' }}>Charging</option>
                        <option value="Maintenance" {{ old('robot_status', $robot->robot_status) == 'Maintenance' ? 'selected' : '' }}>Maintenance</option>
                        <option value="Disabled" {{ old('robot_status', $robot->robot_status) == 'Disabled' ? 'selected' : '' }}>Disabled</option>
                    </select>
                    @error('robot_status') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label for="charge_level" class="form-label">Charge Level (%)</label>
                    <input type="number" name="charge_level" id="charge_level" class="form-control @error('charge_level') is-invalid @enderror" value="{{ old('charge_level', $robot->charge_level) }}" min="0" max="100">
                    @error('charge_level') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label for="paint_level" class="form-label">Paint Level (%)</label>
                    <input type="number" name="paint_level" id="paint_level" class="form-control @error('paint_level') is-invalid @enderror" value="{{ old('paint_level', $robot->paint_level) }}" min="0" max="100">
                    @error('paint_level') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label for="current_location" class="form-label">Current Location</label>
                    <input type="text" name="current_location" id="current_location" class="form-control @error('current_location') is-invalid @enderror" value="{{ old('current_location', $robot->current_location) }}">
                    @error('current_location') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label for="last_maintenance_date" class="form-label">Last Maintenance Date</label>
                    <input type="date" name="last_maintenance_date" id="last_maintenance_date" class="form-control @error('last_maintenance_date') is-invalid @enderror" value="{{ old('last_maintenance_date', $robot->last_maintenance_date) }}">
                    @error('last_maintenance_date') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-start gap-2">
            <button type="submit" class="btn btn-outline-primary">Update</button>
            <a href="{{ route('admin.robots.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>
</div>
@stop
