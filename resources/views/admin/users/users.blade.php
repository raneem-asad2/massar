@extends('adminlte::page')

@section('title', 'Application Users')

@section('content_header')
    <h1>Application Users</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">User Accounts</h3>
        <a href="{{-- route('admin.users.create') --}}" class="btn btn-primary float-right">Add New User</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        {{-- These headers now match your database schema exactly --}}
                        <th>User ID</th>
                        <th>Role ID</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>admin@massar.com</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-info">View</a>
                            <a href="#" class="btn btn-xs btn-warning">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2</td>
                        <td>editor@massar.com</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-info">View</a>
                            <a href="#" class="btn btn-xs btn-warning">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2</td>
                        <td>official@city.gov</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-info">View</a>
                            <a href="#" class="btn btn-xs btn-warning">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop