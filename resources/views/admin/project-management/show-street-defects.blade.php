@extends('adminlte::page')

@section('title', 'Street Defect Details')

@section('content_header')
    <h1 class="font-weight-bold text-dark">Street Defect Details</h1>
@stop

@section('content')
<div class="card shadow-sm border-0 rounded-4">
    <div class="card-header bg-white">
        <h3 class="card-title mb-0 text-primary">{{ $streetDefect->defect_type ?? 'Defect Details' }}</h3>
    </div>
    <div class="card-body">
        <dl class="row mb-0">
            {{-- ID --}}
            <dt class="col-sm-4 text-muted">Defect ID:</dt>
            <dd class="col-sm-8">{{ $streetDefect->id }}</dd>

            {{-- Defect Type --}}
            <dt class="col-sm-4 text-muted">Defect Type:</dt>
            <dd class="col-sm-8">{{ $streetDefect->defect_type }}</dd>

            {{-- Status --}}
            <dt class="col-sm-4 text-muted">Status:</dt>
            <dd class="col-sm-8">{{ $streetDefect->status }}</dd>

            {{-- Segment ID --}}
            <dt class="col-sm-4 text-muted">Related Segment ID:</dt>
            <dd class="col-sm-8">{{ $streetDefect->segment_id ?? 'N/A' }}</dd>
            
            {{-- Location --}}
            <dt class="col-sm-4 text-muted">Location:</dt>
            <dd class="col-sm-8">{{ $streetDefect->location }}</dd>
            
            {{-- Image URL (Consider showing image if the URL is valid, but displaying the URL for consistency) --}}
            <dt class="col-12 text-muted mt-3">Image URL:</dt>
            <dd class="col-12">{{ $streetDefect->image ?? 'No image provided.' }}</dd>
        </dl>
    </div>

    {{-- Footer Actions --}}
    <div class="card-footer d-flex justify-content-between bg-white">
        <a href="{{ route('admin.street-defects.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left mr-1"></i> Back
        </a>
        <a href="{{ route('admin.street-defects.edit', $streetDefect->id) }}" class="btn btn-outline-warning">
            <i class="fas fa-edit mr-1"></i> Edit
        </a>
    </div>
</div>
@stop
