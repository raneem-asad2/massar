@extends('adminlte::page')

@section('title', 'Edit Maintenance Record')

@section('content_header')
    <h1>Edit Maintenance Record</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.maintenance-records.update', $maintenanceRecord) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="staff_id">Staff</label>
                <select name="staff_id" id="staff_id" class="form-control" required>
                    @foreach($staff as $s)
                        <option value="{{ $s->id }}" {{ $maintenanceRecord->staff_id == $s->id ? 'selected' : '' }}>
                            {{ $s->name }}
                        </option>
                    @endforeach
                </select>
                @error('staff_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="robot_id">Robot</label>
                <select name="robot_id" id="robot_id" class="form-control" required>
                    @foreach($robots as $r)
                        <option value="{{ $r->id }}" {{ $maintenanceRecord->robot_id == $r->id ? 'selected' : '' }}>
                            {{ $r->name }}
                        </option>
                    @endforeach
                </select>
                @error('robot_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="maintenance_date">Date</label>
                <input type="date" name="maintenance_date" class="form-control" value="{{ $maintenanceRecord->maintenance_date }}" required>
                @error('maintenance_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" value="{{ $maintenanceRecord->description }}" required>
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="cost">Cost</label>
                <input type="number" name="cost" class="form-control" value="{{ $maintenanceRecord->cost }}" step="0.01" required>
                @error('cost') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.maintenance-records.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@stop
