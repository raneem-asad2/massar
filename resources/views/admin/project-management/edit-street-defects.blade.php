@extends('adminlte::page')

@section('title', 'Edit Street Defect')

@section('content_header')
<h1>Edit Street Defect</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.street-defects.update', $streetDefect->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Defect Type</label>
                <input type="text" name="defect_type" class="form-control" value="{{ $streetDefect->defect_type }}" required>
            </div>

            <div class="form-group">
                <label>Location</label>
                <input type="text" name="location" class="form-control" value="{{ $streetDefect->location }}" required>
            </div>

            <div class="form-group">
                <label>Image URL</label>
                <input type="text" name="image" class="form-control" value="{{ $streetDefect->image }}">
            </div>

            <div class="form-group">
                <label>Status</label>
                <input type="text" name="status" class="form-control" value="{{ $streetDefect->status }}" required>
            </div>

            <div class="form-group">
                <label>Segment ID</label>
                <input type="text" name="segment_id" class="form-control" value="{{ $streetDefect->segment_id }}">
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.street-defects.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@stop
