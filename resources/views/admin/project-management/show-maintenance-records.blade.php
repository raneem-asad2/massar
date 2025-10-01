@extends('adminlte::page')

@section('title', 'Maintenance Record Details')

@section('content_header')
    <h1 class="font-weight-bold text-dark">Maintenance Record Details</h1>
@stop

@section('content')
<div class="card shadow-sm border-0 rounded-4">
    <div class="card-header bg-white">
        <h3 class="card-title mb-0 text-primary">Record #{{ $maintenanceRecord->id }}</h3>
    </div>
    <div class="card-body">
        {{-- Details List --}}
        <dl class="row mb-0">
            
            {{-- ID --}}
            <dt class="col-sm-4 text-muted">Record ID:</dt>
            <dd class="col-sm-8">{{ $maintenanceRecord->id }}</dd>

            {{-- Date --}}
            <dt class="col-sm-4 text-muted">Maintenance Date:</dt>
            <dd class="col-sm-8">
                {{ \Carbon\Carbon::parse($maintenanceRecord->maintenance_date)->format('F d, Y') }}
            </dd>

            {{-- Cost --}}
            <dt class="col-sm-4 text-muted">Cost:</dt>
            <dd class="col-sm-8">${{ number_format($maintenanceRecord->cost, 2) }}</dd>

            {{-- Staff --}}
            <dt class="col-sm-4 text-muted">Performed by Staff:</dt>
            <dd class="col-sm-8">{{ $maintenanceRecord->staff->name ?? 'N/A' }}</dd>

            {{-- Robot --}}
            <dt class="col-sm-4 text-muted">Robot Affected:</dt>
            <dd class="col-sm-8">{{ $maintenanceRecord->robot->robot_name ?? 'N/A' }} (SN: {{ $maintenanceRecord->robot->serial_number ?? 'N/A' }})</dd>

            {{-- Description --}}
            <dt class="col-sm-4 text-muted">Description:</dt>
            <dd class="col-sm-8">{{ $maintenanceRecord->description }}</dd>
            
        </dl>
    </div>

    {{-- Footer Actions --}}
    <div class="card-footer d-flex justify-content-between bg-white">
        <a href="{{ route('admin.maintenance-records.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left mr-1"></i> Back
        </a>
        <a href="{{ route('admin.maintenance-records.edit', $maintenanceRecord->id) }}" class="btn btn-outline-warning">
            <i class="fas fa-edit mr-1"></i> Edit Record
        </a>
    </div>
</div>
@stop
