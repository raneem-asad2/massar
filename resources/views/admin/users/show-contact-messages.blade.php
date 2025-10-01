@extends('adminlte::page')

@section('title', 'Contact Message Details')

@section('content_header')
    <h1 class="font-weight-bold text-dark">Contact Message Details</h1>
@stop

@section('content')
<div class="card shadow-sm border-0 rounded-4">
    <div class="card-header bg-white">
        <h3 class="card-title mb-0 text-primary">Message from: {{ $contactMessage->name ?? 'N/A' }}</h3>
    </div>
    <div class="card-body">
        <dl class="row mb-0">
            {{-- ID --}}
            <dt class="col-sm-4 text-muted">Message ID:</dt>
            <dd class="col-sm-8">{{ $contactMessage->id }}</dd>

            {{-- Name --}}
            <dt class="col-sm-4 text-muted">Sender Name:</dt>
            <dd class="col-sm-8">{{ $contactMessage->name }}</dd>

            {{-- Email --}}
            <dt class="col-sm-4 text-muted">Email:</dt>
            <dd class="col-sm-8"><a href="mailto:{{ $contactMessage->email }}" class="text-decoration-none">{{ $contactMessage->email }}</a></dd>

            {{-- Timestamp (assuming created_at exists) --}}
            @if (isset($contactMessage->created_at))
            <dt class="col-sm-4 text-muted">Received At:</dt>
            <dd class="col-sm-8">{{ \Carbon\Carbon::parse($contactMessage->created_at)->format('F d, Y H:i A') }}</dd>
            @endif

            {{-- Message (Full width) --}}
            <dt class="col-12 text-muted mt-3">Message Content:</dt>
            <dd class="col-12 border p-3 bg-light rounded">{{ $contactMessage->message_text }}</dd>
        </dl>
    </div>

    {{-- Footer Actions --}}
    <div class="card-footer d-flex justify-content-between bg-white">
        <a href="{{ route('contact-messages.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left mr-1"></i> Back to List
        </a>
        <a href="{{ route('contact-messages.edit', $contactMessage->id) }}" class="btn btn-outline-warning">
            <i class="fas fa-edit mr-1"></i> Edit/Mark Read
        </a>
    </div>
</div>
@stop
