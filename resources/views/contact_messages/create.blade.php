@extends('adminlte::page')

@section('title', 'Add Contact Message')

@section('content_header')
<h1>Add Contact Message</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('contact-messages.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label>Message</label>
                <textarea name="message_text" class="form-control" required>{{ old('message_text') }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('contact-messages.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@stop
