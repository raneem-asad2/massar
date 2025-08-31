@extends('adminlte::page')

@section('title', 'Maintenance Record Details')

@section('content_header')
    <h1>Maintenance Record Details</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <p><strong>ID:</strong> {{ $maintenanceRecord->id }}</p>
        <p><strong>Staff:</strong> {{ $maintenanceRecord->staff->name ?? 'N/A' }}</p>
        <p><strong>Robot:</strong> {{ $maintenanceRecord->robot->name ?? 'N/A' }}</p>
        <p><strong>Date:</strong> {{ $maintenanceRecord->maintenance_date }}</p>
        <p><strong>Description:</strong> {{ $maintenanceRecord->description }}</p>
        <p><strong>Cost:</strong> ${{ number_format($maintenanceRecord->cost, 2) }}</p>

        <a href="{{ route('maintenance-records.edit', $maintenanceRecord) }}" class="btn btn-warning mt-3">Edit</a>
        <a href="{{ route('maintenance-records.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
</div>
@stop
