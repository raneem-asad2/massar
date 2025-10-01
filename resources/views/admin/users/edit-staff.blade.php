@extends('adminlte::page')

@section('title', 'Edit Staff')

@section('content_header')
    <h1>Edit Staff</h1>
@stop

@section('content')
<div class="card shadow-sm border-0 rounded-4">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0">Edit Staff Details</h3>
    </div>
    <form action="{{ route('admin.staff.update', $staff->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="row g-3">
                
                {{-- Name --}}
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $staff->name) }}" required>
                    @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                
                {{-- Email --}}
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $staff->email) }}" required>
                    @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                
                {{-- Phone --}}
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $staff->phone) }}" required>
                    @error('phone') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                
                {{-- Job Title --}}
                <div class="col-md-6">
                    <label for="job_title" class="form-label">Job Title</label>
                    <input type="text" name="job_title" id="job_title" class="form-control @error('job_title') is-invalid @enderror" value="{{ old('job_title', $staff->job_title) }}" required>
                    @error('job_title') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                
                {{-- Role --}}
                <div class="col-md-6">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" name="role" id="role" class="form-control @error('role') is-invalid @enderror" value="{{ old('role', $staff->role) }}">
                    @error('role') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                
            </div>
        </div>
        <div class="card-footer d-flex justify-content-start gap-2">
            <button type="submit" class="btn btn-outline-primary">Update</button>
            {{-- Using the correct route for cancel, matching the previous "Back" link functionality --}}
            <a href="{{ route('admin.staff.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>
</div>
@stop
