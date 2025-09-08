@extends('adminlte::page')

@section('title', 'Add Staff')

@section('content_header')
    <h1>Add Staff</h1>
    <a href="{{ route('staff.index') }}" class="btn btn-secondary">Back</a>
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

            <form action="{{ route('staff.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Job Title</label>
                    <input type="text" name="job_title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <input type="text" name="role" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@stop
