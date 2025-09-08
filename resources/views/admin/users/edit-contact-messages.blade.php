@extends('adminlte::page')

@section('title', 'Edit Contact Message')

@section('content_header')
<h1>Edit Contact Message</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('contact-messages.update', $contactMessage->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $contactMessage->name }}" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $contactMessage->email }}" required>
            </div>

            <div class="form-group">
                <label>Message</label>
                <textarea name="message_text" class="form-control" required>{{ $contactMessage->message_text }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('contact-messages.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@stop
