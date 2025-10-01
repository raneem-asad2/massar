@extends('adminlte::page')

@section('title', 'Edit Street Defect')

@section('content_header')
    <h1>Edit Street Defect</h1>
@stop

@section('content')
<div class="card shadow-sm border-0 rounded-4">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0">Edit Defect Details</h3>
    </div>
    <form action="{{ route('admin.street-defects.update', $streetDefect->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="row g-3">
                
                {{-- Defect Type --}}
                <div class="col-md-6">
                    <label for="defect_type" class="form-label">Defect Type</label>
                    <input type="text" name="defect_type" id="defect_type" class="form-control @error('defect_type') is-invalid @enderror" value="{{ old('defect_type', $streetDefect->defect_type) }}" required>
                    @error('defect_type') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Location --}}
                <div class="col-md-6">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" name="location" id="location" class="form-control @error('location') is-invalid @enderror" value="{{ old('location', $streetDefect->location) }}" required>
                    @error('location') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                
                {{-- Status Dropdown --}}
                <div class="col-md-6">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                        <option value="">Select Status</option>
                        @php $currentStatus = old('status', $streetDefect->status); @endphp
                        <option value="Reported" {{ $currentStatus == 'Reported' ? 'selected' : '' }}>Reported</option>
                        <option value="In Progress" {{ $currentStatus == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="Repaired" {{ $currentStatus == 'Repaired' ? 'selected' : '' }}>Repaired</option>
                        <option value="Closed" {{ $currentStatus == 'Closed' ? 'selected' : '' }}>Closed</option>
                    </select>
                    @error('status') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                
                {{-- Segment ID --}}
                <div class="col-md-6">
                    <label for="segment_id" class="form-label">Segment ID</label>
                    <input type="text" name="segment_id" id="segment_id" class="form-control @error('segment_id') is-invalid @enderror" value="{{ old('segment_id', $streetDefect->segment_id) }}">
                    @error('segment_id') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Image URL --}}
                <div class="col-md-12"> {{-- Use col-md-12 for full width for a URL --}}
                    <label for="image" class="form-label">Image URL</label>
                    <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image', $streetDefect->image) }}">
                    @error('image') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                
            </div>
        </div>
        <div class="card-footer d-flex justify-content-start gap-2">
            <button type="submit" class="btn btn-outline-primary">Update Defect</button>
            <a href="{{ route('admin.street-defects.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>
</div>
@stop
