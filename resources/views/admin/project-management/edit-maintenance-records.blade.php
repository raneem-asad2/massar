@extends('adminlte::page')

@section('title', 'Edit Maintenance Record')

@section('content_header')
    <h1>Edit Maintenance Record</h1>
@stop

@section('content')
<div class="card shadow-sm border-0 rounded-4">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0">Edit Maintenance Details</h3>
    </div>
    <form action="{{ route('admin.maintenance-records.update', $maintenanceRecord->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="row g-3">
                
                {{-- Staff ID Dropdown --}}
                <div class="col-md-6">
                    <label for="staff_id" class="form-label">Staff</label>
                    <select name="staff_id" id="staff_id" class="form-control @error('staff_id') is-invalid @enderror" required>
                        <option value="">Select Staff Member</option>
                        @foreach($staff as $s)
                            <option value="{{ $s->id }}" {{ old('staff_id', $maintenanceRecord->staff_id) == $s->id ? 'selected' : '' }}>
                                {{ $s->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('staff_id') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Robot ID Dropdown --}}
                <div class="col-md-6">
                    <label for="robot_id" class="form-label">Robot</label>
                    <select name="robot_id" id="robot_id" class="form-control @error('robot_id') is-invalid @enderror" required>
                        <option value="">Select Robot</option>
                        @foreach($robots as $r)
                            <option value="{{ $r->id }}" {{ old('robot_id', $maintenanceRecord->robot_id) == $r->id ? 'selected' : '' }}>
                                {{ $r->robot_name }} ({{ $r->serial_number }})
                            </option>
                        @endforeach
                    </select>
                    @error('robot_id') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                
                {{-- Maintenance Date --}}
                <div class="col-md-6">
                    <label for="maintenance_date" class="form-label">Date</label>
                    <input type="date" name="maintenance_date" id="maintenance_date" class="form-control @error('maintenance_date') is-invalid @enderror" value="{{ old('maintenance_date', $maintenanceRecord->maintenance_date) }}" required>
                    @error('maintenance_date') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                
                {{-- Cost --}}
                <div class="col-md-6">
                    <label for="cost" class="form-label">Cost ($)</label>
                    <input type="number" name="cost" id="cost" class="form-control @error('cost') is-invalid @enderror" value="{{ old('cost', $maintenanceRecord->cost) }}" step="0.01" min="0" required>
                    @error('cost') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Description (Full Width) --}}
                <div class="col-md-12">
                    <label for="description" class="form-label">Description of Work Performed</label>
                    <textarea name="description" id="description" rows="3" class="form-control @error('description') is-invalid @enderror" required>{{ old('description', $maintenanceRecord->description) }}</textarea>
                    @error('description') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                
            </div>
        </div>
        <div class="card-footer d-flex justify-content-start gap-2">
            <button type="submit" class="btn btn-outline-primary">Update</button>
            <a href="{{ route('admin.maintenance-records.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>
</div>
@stop
