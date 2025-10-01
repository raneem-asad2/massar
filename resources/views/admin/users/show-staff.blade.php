@extends('adminlte::page')

@section('title', 'Staff Details')

@section('content_header')
    <h1 class="font-weight-bold text-dark">Staff Details</h1>
@stop

@section('content')
<div class="card shadow-sm border-0 rounded-4">
    <div class="card-header bg-white">
        <h3 class="card-title mb-0 text-primary">{{ $staff->name ?? 'Staff Member' }}</h3>
    </div>

    <div class="card-body">
        <dl class="row mb-0">
            {{-- ID --}}
            <dt class="col-sm-4 text-muted">Staff ID:</dt>
            <dd class="col-sm-8">{{ $staff->id }}</dd>

            {{-- Name --}}
            <dt class="col-sm-4 text-muted">Full Name:</dt>
            <dd class="col-sm-8">{{ $staff->name }}</dd>

            {{-- Email --}}
            <dt class="col-sm-4 text-muted">Email:</dt>
            <dd class="col-sm-8">
                <a href="mailto:{{ $staff->email }}" class="text-decoration-none">
                    {{ $staff->email }}
                </a>
            </dd>

            {{-- Phone --}}
            <dt class="col-sm-4 text-muted">Phone:</dt>
            <dd class="col-sm-8">{{ $staff->phone ?? 'N/A' }}</dd>

            {{-- Job Title --}}
            <dt class="col-sm-4 text-muted">Job Title:</dt>
            <dd class="col-sm-8">{{ $staff->job_title ?? 'N/A' }}</dd>

            {{-- Role --}}
            <dt class="col-sm-4 text-muted">Role:</dt>
            <dd class="col-sm-8">{{ ucfirst($staff->role) ?? 'N/A' }}</dd>

            {{-- Created At --}}
            @if(isset($staff->created_at))
                <dt class="col-sm-4 text-muted">Added On:</dt>
                <dd class="col-sm-8">
                    {{ \Carbon\Carbon::parse($staff->created_at)->format('F d, Y H:i A') }}
                </dd>
            @endif
        </dl>
    </div>

    {{-- Footer Actions --}}
    <div class="card-footer d-flex justify-content-between bg-white">
        <a href="{{ route('admin.staff.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left mr-1"></i> Back to List
        </a>
        <a href="{{ route('admin.staff.edit', $staff->id) }}" class="btn btn-outline-warning">
            <i class="fas fa-edit mr-1"></i> Edit Staff
        </a>
    </div>
</div>
@stop
