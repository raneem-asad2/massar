@extends('adminlte::page')

@section('title', 'Staff Members')

@section('content_header')
    <h1>Staff Members</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Internal Team</h3>
        <a href="{{-- route('admin.staff.create') --}}" class="btn btn-primary float-right">Add New Staff Member</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        {{-- These headers now match your database schema exactly --}}
                        <th>Staff ID</th>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Job Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>John Doe</td>
                        <td>john.d@massar.com</td>
                        <td>555-0101</td>
                        <td>Lead Technician</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-info">View</a>
                            <a href="#" class="btn btn-xs btn-warning">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>3</td>
                        <td>Jane Smith</td>
                        <td>jane.s@massar.com</td>
                        <td>555-0102</td>
                        <td>Robotics Engineer</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-info">View</a>
                            <a href="#" class="btn btn-xs btn-warning">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>4</td>
                        <td>Peter Jones</td>
                        <td>peter.j@massar.com</td>
                        <td>555-0103</td>
                        <td>Operations Manager</td>
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