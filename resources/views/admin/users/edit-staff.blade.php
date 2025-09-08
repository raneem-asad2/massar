@extends('adminlte::page')

@section('title', 'Edit Staff')

@section('content_header')
    <h1>Edit Staff</h1>
    <a href="{{ route('admin.staff.index') }}" class="btn btn-secondary">Back</a>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.staff.update', $staff->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $staff->name }}" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $staff->email }}" required>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $staff->phone }}" required>
                </div>
                <div class="form-group">
                    <label>Job Title</label>
                    <input type="text" name="job_title" class="form-control" value="{{ $staff->job_title }}" required>
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <input type="text" name="role" class="form-control" value="{{ $staff->role }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@stop
