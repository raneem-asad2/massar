@extends('adminlte::page')

@section('title', 'Road Segment Details')

@section('content_header')
    <h1 class="font-weight-bold text-dark">Road Segment Details</h1>
@stop

@section('content')
<div class="card shadow-sm border-0 rounded-4">
    <div class="card-header bg-white">
        <h3 class="card-title mb-0 text-primary">{{ $roadSegment->segment_name ?? 'Segment Details' }}</h3>
    </div>
    <div class="card-body">
        <dl class="row mb-0">
            {{-- ID --}}
            <dt class="col-sm-4 text-muted">Segment ID:</dt>
            <dd class="col-sm-8">{{ $roadSegment->id }}</dd>

            {{-- Segment Name --}}
            <dt class="col-sm-4 text-muted">Segment Name:</dt>
            <dd class="col-sm-8">{{ $roadSegment->segment_name }}</dd>

            {{-- Status --}}
            <dt class="col-sm-4 text-muted">Status:</dt>
            <dd class="col-sm-8">{{ $roadSegment->status }}</dd>

            {{-- Line Type --}}
            <dt class="col-sm-4 text-muted">Line Type:</dt>
            <dd class="col-sm-8">{{ $roadSegment->line_type }}</dd>

            {{-- Start Coordinates --}}
            <dt class="col-sm-4 text-muted">Start Coordinates:</dt>
            <dd class="col-sm-8">{{ $roadSegment->start_coordinates }}</dd>

            {{-- End Coordinates --}}
            <dt class="col-sm-4 text-muted">End Coordinates:</dt>
            <dd class="col-sm-8">{{ $roadSegment->end_coordinates }}</dd>

            {{-- Project ID --}}
            <dt class="col-sm-4 text-muted">Project ID:</dt>
            <dd class="col-sm-8">{{ $roadSegment->project_id ?? 'N/A' }}</dd>

            {{-- Description (Takes full width for better reading) --}}
            <dt class="col-12 text-muted mt-3">Description:</dt>
            <dd class="col-12">{{ $roadSegment->description ?? 'No description provided.' }}</dd>
        </dl>
    </div>

    {{-- Footer Actions --}}
    <div class="card-footer d-flex justify-content-between bg-white">
        <a href="{{ route('admin.road-segments.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left mr-1"></i> Back
        </a>
        <a href="{{ route('admin.road-segments.edit', $roadSegment->id) }}" class="btn btn-outline-warning">
            <i class="fas fa-edit mr-1"></i> Edit
        </a>
    </div>
</div>
@stop
