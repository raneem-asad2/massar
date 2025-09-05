@extends('adminlte::page')

@section('title', 'Edit Road Segment')

@section('content_header')
    <h1>Edit Road Segment</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('road-segments.update', $roadSegment->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Segment Name</label>
                <input type="text" name="segment_name" class="form-control" value="{{ $roadSegment->segment_name }}" required>
            </div>

            <div class="form-group">
                <label>Status</label>
                <input type="text" name="status" class="form-control" value="{{ $roadSegment->status }}" required>
            </div>

            <div class="form-group">
                <label>Line Type</label>
                <input type="text" name="line_type" class="form-control" value="{{ $roadSegment->line_type }}" required>
            </div>

            <div class="form-group">
                <label>Start Coordinates</label>
                <input type="text" name="start_coordinates" class="form-control" value="{{ $roadSegment->start_coordinates }}" required>
            </div>

            <div class="form-group">
                <label>End Coordinates</label>
                <input type="text" name="end_coordinates" class="form-control" value="{{ $roadSegment->end_coordinates }}" required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" value="{{ $roadSegment->description }}">
            </div>

            <div class="form-group">
                <label>Project ID</label>
                <input type="text" name="project_id" class="form-control" value="{{ $roadSegment->project_id }}">
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('road-segments.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@stop
