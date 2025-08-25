@extends('adminlte::page')

@section('title', 'Robots List')

@section('content_header')
    <h1>Robots List</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Robots in Fleet</h3>
        <a href="{{-- route('admin.robots.create') --}}" class="btn btn-primary float-right">Add New Robot</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        {{-- These headers now match your database schema exactly --}}
                        <th>Robot ID</th>
                        <th>Robot Name</th>
                        <th>Serial Number</th>
                        <th>Status</th>
                        <th>Charge Level (%)</th>
                        <th>Paint Level (%)</th>
                        <th>Current Location</th>
                        <th>Next Maintenance</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Massar V3.0-A</td>
                        <td>SN-MSR-001A3</td>
                        <td><span class="badge bg-success">Painting</span></td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-success" style="width: 85%"></div>
                            </div>
                            <span class="badge bg-success">85%</span>
                        </td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-primary" style="width: 70%"></div>
                            </div>
                            <span class="badge bg-primary">70%</span>
                        </td>
                        <td>31.95, 35.91</td>
                        <td>2025-09-15</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-info">View</a>
                            <a href="#" class="btn btn-xs btn-warning">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Massar V2.1-B</td>
                        <td>SN-MSR-002B1</td>
                        <td><span class="badge bg-warning">Charging</span></td>
                        <td>
                             <div class="progress progress-xs">
                                <div class="progress-bar bg-warning" style="width: 45%"></div>
                            </div>
                            <span class="badge bg-warning">45%</span>
                        </td>
                        <td>
                             <div class="progress progress-xs">
                                <div class="progress-bar bg-info" style="width: 100%"></div>
                            </div>
                            <span class="badge bg-info">100%</span>
                        </td>
                        <td>Charging Bay A</td>
                        <td>2025-10-01</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-info">View</a>
                            <a href="#" class="btn btn-xs btn-warning">Edit</a>
                        </td>
                    </tr>
                     <tr>
                        <td>3</td>
                        <td>Massar V3.0-C</td>
                        <td>SN-MSR-001C2</td>
                        <td><span class="badge bg-danger">Error</span></td>
                        <td>
                             <div class="progress progress-xs">
                                <div class="progress-bar bg-danger" style="width: 22%"></div>
                            </div>
                            <span class="badge bg-danger">22%</span>
                        </td>
                         <td>
                             <div class="progress progress-xs">
                                <div class="progress-bar bg-warning" style="width: 30%"></div>
                            </div>
                            <span class="badge bg-warning">30%</span>
                        </td>
                        <td>31.96, 35.92</td>
                        <td>2025-08-22</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-info">View</a>
                            <a href="#" class="btn btn-xs btn-warning">Edit</a>
                        </td>
                    </tr>
                     <tr>
                        <td>4</td>
                        <td>Massar V2.1-D</td>
                        <td>SN-MSR-002D4</td>
                        <td><span class="badge bg-secondary">Idle</span></td>
                        <td>
                             <div class="progress progress-xs">
                                <div class="progress-bar bg-info" style="width: 98%"></div>
                            </div>
                            <span class="badge bg-info">98%</span>
                        </td>
                         <td>
                             <div class="progress progress-xs">
                                <div class="progress-bar bg-info" style="width: 95%"></div>
                            </div>
                            <span class="badge bg-info">95%</span>
                        </td>
                        <td>Charging Bay B</td>
                        <td>2025-11-05</td>
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