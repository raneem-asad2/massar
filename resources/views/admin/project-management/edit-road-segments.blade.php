@extends('adminlte::page')

@section('title', 'Edit Road Segment')

@section('content_header')
    <h1>Edit Road Segment</h1>
@stop

@section('content')
<div class="card shadow-sm border-0 rounded-4">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0">Edit Road Segment Details</h3>
    </div>
    <form action="{{ route('admin.road-segments.update', $roadSegment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="row g-3">
                
                {{-- Segment Name --}}
                <div class="col-md-6">
                    <label for="segment_name" class="form-label">Segment Name</label>
                    <input type="text" name="segment_name" id="segment_name" class="form-control @error('segment_name') is-invalid @enderror" value="{{ old('segment_name', $roadSegment->segment_name) }}" required>
                    @error('segment_name') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Status Dropdown --}}
                <div class="col-md-6">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                        <option value="">Select Status</option>
                        @php $currentStatus = old('status', $roadSegment->status); @endphp
                        <option value="Operational" {{ $currentStatus == 'Operational' ? 'selected' : '' }}>Operational</option>
                        <option value="Under Maintenance" {{ $currentStatus == 'Under Maintenance' ? 'selected' : '' }}>Under Maintenance</option>
                        <option value="Scheduled" {{ $currentStatus == 'Scheduled' ? 'selected' : '' }}>Scheduled</option>
                        <option value="Disabled" {{ $currentStatus == 'Disabled' ? 'selected' : '' }}>Disabled</option>
                    </select>
                    @error('status') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                
                {{-- Line Type --}}
                <div class="col-md-6">
                    <label for="line_type" class="form-label">Line Type</label>
                    <input type="text" name="line_type" id="line_type" class="form-control @error('line_type') is-invalid @enderror" value="{{ old('line_type', $roadSegment->line_type) }}" required>
                    @error('line_type') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Project ID --}}
                <div class="col-md-6">
                    <label for="project_id" class="form-label">Project ID</label>
                    <input type="text" name="project_id" id="project_id" class="form-control @error('project_id') is-invalid @enderror" value="{{ old('project_id', $roadSegment->project_id) }}">
                    @error('project_id') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                
                {{-- Start Coordinates --}}
                <div class="col-md-6">
                    <label for="start_coordinates" class="form-label">Start Coordinates</label>
                    <input type="text" name="start_coordinates" id="start_coordinates" class="form-control @error('start_coordinates') is-invalid @enderror" value="{{ old('start_coordinates', $roadSegment->start_coordinates) }}" required>
                    @error('start_coordinates') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- End Coordinates --}}
                <div class="col-md-6">
                    <label for="end_coordinates" class="form-label">End Coordinates</label>
                    <input type="text" name="end_coordinates" id="end_coordinates" class="form-control @error('end_coordinates') is-invalid @enderror" value="{{ old('end_coordinates', $roadSegment->end_coordinates) }}" required>
                    @error('end_coordinates') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Description (Full Width) --}}
                <div class="col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" rows="3" class="form-control @error('description') is-invalid @enderror">{{ old('description', $roadSegment->description) }}</textarea>
                    @error('description') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                
            </div>
        </div>
        <div class="card-footer d-flex justify-content-start gap-2">
            <button type="submit" class="btn btn-outline-primary">Update</button>
            <a href="{{ route('admin.road-segments.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>
</div>
@stop
