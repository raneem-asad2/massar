@extends('adminlte::page')

@section('title', 'Edit Profile')

@section('content_header')
    <h1>Edit Profile</h1>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">

        <form method="POST" action="{{ route('admin.profile.update') }}" class="card card-primary">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="name" class="form-control" id="name"
                           value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email"
                           value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm New Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                </div>
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>

    </div>
</div>
@stop
