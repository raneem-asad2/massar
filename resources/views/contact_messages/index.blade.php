@extends('adminlte::page')

@section('title', 'Contact Messages')

@section('content_header')
<h1>Contact Messages</h1>
<a href="{{ route('contact-messages.create') }}" class="btn btn-success mb-3">Add Message</a>
@stop

@section('content')
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message_text }}</td>
                    <td>
                        <a href="{{ route('contact-messages.show', $message->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('contact-messages.edit', $message->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('contact-messages.destroy', $message->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
