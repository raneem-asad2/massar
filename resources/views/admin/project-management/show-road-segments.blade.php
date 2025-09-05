@extends('adminlte::page')

@section('title', 'Road Segment Details')

@section('content_header')
    <h1>Road Segment Details</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <p><strong>ID:</strong> {{ $roadSegment->id }}</p>
        <p><strong>Segment Name:</strong> {{ $roadSegment->segment_name }}</p>
        <p><strong>Status:</strong> {{ $roadSegment->status }}</p>
        <p><strong>Line Type:</strong> {{ $roadSegment->line_type }}</p>
        <p><strong>Start Coordinates:</strong> {{ $roadSegment->start_coordinates }}</p>
        <p><strong>End Coordinates:</strong> {{ $roadSegment->end_coordinates }}</p>
        <p><strong>Description:</strong> {{ $roadSegment->description }}</p>
        <p><strong>Project ID:</strong> {{ $roadSegment->project_id }}</p>

        <a href="{{ route('road-segments.edit', $roadSegment->id) }}" class="btn btn-warning mt-3">Edit</a>
        <a href="{{ route('road-segments.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
</div>
@stop
