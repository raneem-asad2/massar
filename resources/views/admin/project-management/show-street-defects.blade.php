@extends('adminlte::page')

@section('title', 'Street Defect Details')

@section('content_header')
<h1>Street Defect Details</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <p><strong>ID:</strong> {{ $streetDefect->id }}</p>
        <p><strong>Defect Type:</strong> {{ $streetDefect->defect_type }}</p>
        <p><strong>Location:</strong> {{ $streetDefect->location }}</p>
        <p><strong>Image:</strong> {{ $streetDefect->image }}</p>
        <p><strong>Status:</strong> {{ $streetDefect->status }}</p>
        <p><strong>Segment ID:</strong> {{ $streetDefect->segment_id }}</p>

        <a href="{{ route('admin.street-defects.edit', $streetDefect->id) }}" class="btn btn-warning mt-3">Edit</a>
        <a href="{{ route('admin.street-defects.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
</div>
@stop
