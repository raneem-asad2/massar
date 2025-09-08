@extends('adminlte::page')

@section('title', 'Contact Message Details')

@section('content_header')
<h1>Contact Message Details</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <p><strong>ID:</strong> {{ $contactMessage->id }}</p>
        <p><strong>Name:</strong> {{ $contactMessage->name }}</p>
        <p><strong>Email:</strong> {{ $contactMessage->email }}</p>
        <p><strong>Message:</strong> {{ $contactMessage->message_text }}</p>

        <a href="{{ route('contact-messages.edit', $contactMessage->id) }}" class="btn btn-warning mt-3">Edit</a>
        <a href="{{ route('contact-messages.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
</div>
@stop
