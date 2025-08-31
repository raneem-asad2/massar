@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Maintenance Records</h1>
    <a href="{{ route('maintenance-records.create') }}" class="btn btn-primary">Add Record</a>

    @if(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Staff</th>
                <th>Robot</th>
                <th>Date</th>
                <th>Description</th>
                <th>Cost</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->staff->name ?? 'N/A' }}</td>
                    <td>{{ $record->robot->name ?? 'N/A' }}</td>
                    <td>{{ $record->maintenance_date }}</td>
                    <td>{{ $record->description }}</td>
                    <td>${{ number_format($record->cost, 2) }}</td>
                    <td>
                        <a href="{{ route('maintenance-records.show', $record) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('maintenance-records.edit', $record) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('maintenance-records.destroy', $record) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
