@extends('adminlte::page')

@section('title', 'View Staff')

@section('content_header')
    <h1>Staff Details</h1>
    <a href="{{ route('admin.staff.index') }}" class="btn btn-secondary">Back</a>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tr><th>ID</th><td>{{ $staff->id }}</td></tr>
                <tr><th>Name</th><td>{{ $staff->name }}</td></tr>
                <tr><th>Email</th><td>{{ $staff->email }}</td></tr>
                <tr><th>Phone</th><td>{{ $staff->phone }}</td></tr>
                <tr><th>Job Title</th><td>{{ $staff->job_title }}</td></tr>
                <tr><th>Role</th><td>{{ $staff->role }}</td></tr>
            </table>
        </div>
    </div>
@stop
