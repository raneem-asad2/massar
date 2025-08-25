@extends('adminlte::page')

@section('title', 'Maintenance Records')

@section('content_header')
    <h1>Maintenance Records</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Service Log</h3>
        <a href="{{-- route('admin.maintenance-records.create') --}}" class="btn btn-primary float-right">Log New Service</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        {{-- These headers now match your database schema exactly --}}
                        <th>Record ID</th>
                        <th>Robot ID</th>
                        <th>Serviced By (Staff ID)</th>
                        <th>Maintenance Date</th>
                        <th>Description</th>
                        <th>Cost</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>152</td>
                        <td>3</td>
                        <td>1</td>
                        <td>2025-08-22</td>
                        <td>Performed full sensor calibration and diagnostics. Replaced worn paint nozzle.</td>
                        <td>250</td>
                        <td><a href="#" class="btn btn-xs btn-info">View Details</a></td>
                    </tr>
                    <tr>
                        <td>153</td>
                        <td>1</td>
                        <td>2</td>
                        <td>2025-08-24</td>
                        <td>Routine battery health check and terminal cleaning. All systems nominal.</td>
                        <td>75</td>
                        <td><a href="#" class="btn btn-xs btn-info">View Details</a></td>
                    </tr>
                    <tr>
                        <td>154</td>
                        <td>2</td>
                        <td>1</td>
                        <td>2025-08-25</td>
                        <td>Replaced left wheel motor assembly due to excessive wear.</td>
                        <td>850</td>
                        <td><a href="#" class="btn btn-xs btn-info">View Details</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop