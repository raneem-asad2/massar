@extends('adminlte::page')

@section('title', 'Road Segments')

@section('content_header')
    <h1>Road Segments</h1>
    <a href="{{ route('road-segments.create') }}" class="btn btn-success mb-3">Add Road Segment</a>
@stop

@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Segment Name</th>
                    <th>Status</th>
                    <th>Line Type</th>
                    <th>Start Coordinates</th>
                    <th>End Coordinates</th>
                    <th>Description</th>
                    <th>Project ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($segments as $segment)
                <tr>
                    <td>{{ $segment->id }}</td>
                    <td>{{ $segment->segment_name }}</td>
                    <td>{{ $segment->status }}</td>
                    <td>{{ $segment->line_type }}</td>
                    <td>{{ $segment->start_coordinates }}</td>
                    <td>{{ $segment->end_coordinates }}</td>
                    <td>{{ $segment->description }}</td>
                    <td>{{ $segment->project_id }}</td>
                    <td>
                        <a href="{{ route('road-segments.show', $segment->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('road-segments.edit', $segment->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('road-segments.destroy', $segment->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
