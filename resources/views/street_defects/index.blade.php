@extends('adminlte::page')

@section('title', 'Street Defects')

@section('content_header')
<h1>Street Defects</h1>
<a href="{{ route('street-defects.create') }}" class="btn btn-success mb-3">Add Defect</a>
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
                    <th>Defect Type</th>
                    <th>Location</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Segment ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($defects as $defect)
                <tr>
                    <td>{{ $defect->id }}</td>
                    <td>{{ $defect->defect_type }}</td>
                    <td>{{ $defect->location }}</td>
                    <td>{{ $defect->image }}</td>
                    <td>{{ $defect->status }}</td>
                    <td>{{ $defect->segment_id }}</td>
                    <td>
                        <a href="{{ route('street-defects.show', $defect->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('street-defects.edit', $defect->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('street-defects.destroy', $defect->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
