@extends('adminlte::page')

@section('title', 'Add Street Defect')

@section('content_header')
<h1>Add Street Defect</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('street-defects.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Defect Type</label>
                <input type="text" name="defect_type" class="form-control" value="{{ old('defect_type') }}" required>
            </div>

            <div class="form-group">
                <label>Location</label>
                <input type="text" name="location" class="form-control" value="{{ old('location') }}" required>
            </div>

            <div class="form-group">
                <label>Image URL</label>
                <input type="text" name="image" class="form-control" value="{{ old('image') }}">
            </div>

            <div class="form-group">
                <label>Status</label>
                <input type="text" name="status" class="form-control" value="{{ old('status') }}" required>
            </div>

            <div class="form-group">
                <label>Segment ID</label>
                <input type="text" name="segment_id" class="form-control" value="{{ old('segment_id') }}">
            </div>

            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('street-defects.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@stop
