@extends( 'adminlte::page')

@section('title', 'Street Defects')

@section('content_header')
    <h1>Street Defects</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Reported Defects</h3>
        <a href="{{-- route('admin.street-defects.create') --}}" class="btn btn-primary float-right">Report New Defect</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Defect ID</th>
                        <th>Segment ID</th>
                        <th>Defect Type</th>
                        <th>Location</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>31.953, 35.914</td>
                        <td>Faded Lines</td>
                        <td><a href="#" target="_blank">View Image</a></td>
                        <td><span class="badge bg-success">Repaired</span></td>
                        <td>
                            <a href="#" class="btn btn-xs btn-info">View</a>
                            <a href="#" class="btn btn-xs btn-warning">Edit</a>
                        </td>
                    </tr>
                     <tr>
                        <td>2</td>
                        <td>2</td>
                        <td>31.825, 35.993</td>
                        <td>Pothole</td>
                        <td><a href="#" target="_blank">View Image</a></td>
                        <td><span class="badge bg-warning">Pending Inspection</span></td>
                        <td>
                            <a href="#" class="btn btn-xs btn-info">View</a>
                            <a href="#" class="btn btn-xs btn-warning">Edit</a>
                        </td>
                    </tr>
                     <tr>
                        <td>3</td>
                        <td>1</td>
                        <td>31.955, 35.917</td>
                        <td>Cracked Pavement</td>
                        <td>N/A</td>
                        <td><span class="badge bg-danger">Requires Action</span></td>
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