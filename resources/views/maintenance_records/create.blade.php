@extends('adminlte::page')

@section('title', 'Add Maintenance Record')

@section('content_header')
    <h1>Add Maintenance Record</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {{-- Create form --}}
        <form action="{{ route('maintenance-records.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="staff_id">Staff</label>
                <input type="text" name="staff_id" id="staff_id" class="form-control" value="{{ old('staff_id') }}" placeholder="Enter Staff ID or Name" required>
                @error('staff_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="robot_id">Robot</label>
                <input type="text" name="robot_id" id="robot_id" class="form-control" value="{{ old('robot_id') }}" placeholder="Enter Robot ID or Name" required>
                @error('robot_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="maintenance_date">Date</label>
                <input type="date" name="maintenance_date" id="maintenance_date" class="form-control" value="{{ old('maintenance_date') }}" required>
                @error('maintenance_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}" required>
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="cost">Cost</label>
                <input type="number" name="cost" id="cost" class="form-control" value="{{ old('cost') }}" step="0.01" required>
                @error('cost') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('maintenance-records.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@stop
