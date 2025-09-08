@extends('adminlte::page')

@section('title', 'Add Road Segment')

@section('content_header')
    <h1>Add Road Segment</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.road-segments.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Segment Name</label>
                <input type="text" name="segment_name" class="form-control" value="{{ old('segment_name') }}" required>
            </div>

            <div class="form-group">
                <label>Status</label>
                <input type="text" name="status" class="form-control" value="{{ old('status') }}" required>
            </div>

            <div class="form-group">
                <label>Line Type</label>
                <input type="text" name="line_type" class="form-control" value="{{ old('line_type') }}" required>
            </div>

            <div class="form-group">
                <label>Start Coordinates</label>
                <input type="text" name="start_coordinates" class="form-control" value="{{ old('start_coordinates') }}" required>
            </div>

            <div class="form-group">
                <label>End Coordinates</label>
                <input type="text" name="end_coordinates" class="form-control" value="{{ old('end_coordinates') }}" required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" value="{{ old('description') }}">
            </div>

            <div class="form-group">
                <label>Project ID</label>
                <input type="text" name="project_id" class="form-control" value="{{ old('project_id') }}">
            </div>

            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('admin.road-segments.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@stop
