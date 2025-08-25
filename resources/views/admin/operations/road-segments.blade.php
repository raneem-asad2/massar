@extends( 'adminlte::page')

@section('title', 'Road Segments')

@section('content_header')
    <h1>Road Segments</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Mapped Road Segments</h3>
        <a href="{{-- route('admin.road-segments.create') --}}" class="btn btn-primary float-right">Add New Segment</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        {{-- These headers now match your database schema exactly --}}
                        <th>Segment ID</th>
                        <th>Project ID</th>
                        <th>Segment Name</th>
                        <th>Status</th>
                        <th>Line Type</th>
                        <th>Start Coordinates</th>
                        <th>End Coordinates</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>101</td>
                        <td>Main Street - Sector A</td>
                        <td><span class="badge bg-success">Completed</span></td>
                        <td>Solid White</td>
                        <td>31.951, 35.912</td>
                        <td>31.958, 35.919</td>
                        <td>Standard 4-lane road segment.</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-info">View</a>
                            <a href="#" class="btn btn-xs btn-warning">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>101</td>
                        <td>Airport Road - Sector B</td>
                        <td><span class="badge bg-primary">In Progress</span></td>
                        <td>Dashed Yellow</td>
                        <td>31.822, 35.991</td>
                        <td>31.835, 35.998</td>
                        <td>Highway divider line.</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-info">View</a>
                            <a href="#" class="btn btn-xs btn-warning">Edit</a>
                        </td>
                    </tr>
                     <tr>
                        <td>3</td>
                        <td>102</td>
                        <td>Industrial Zone - West Loop</td>
                        <td><span class="badge bg-secondary">Pending</span></td>
                        <td>Double Solid White</td>
                        <td>31.901, 35.855</td>
                        <td>31.909, 35.862</td>
                        <td>Scheduled for next week.</td>
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
@endsection