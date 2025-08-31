@extends('adminlte::page')

@section('title', 'User Details')

@section('content_header')
    <h1>User Details</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <p><strong>ID:</strong> {{ $user->id }}</p>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Role:</strong> {{ $user->role_id }}</p>

        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">Back</a>
        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-outline-warning">Edit</a>
    </div>
</div>
@stop
