@extends('adminlte::page')

@section('title', 'Maintenance Records')

@section('content_header')
    <h1 class="font-weight-bold">Maintenance Records</h1>
@stop

@section('content')
<div class="container-fluid">
    {{-- Success / Error Messages --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0 font-weight-bold text-dark">All Maintenance Records</h3>
            <a href="{{ route('admin.maintenance-records.create') }}" class="btn btn-outline-primary btn-sm px-3">
                <i class="fas fa-plus mr-1"></i> Add Record
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Staff</th>
                            <th>Robot</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Cost</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($records as $record)
                        <tr>
                            <td>{{ $record->id }}</td>
                            <td>{{ $record->staff->name ?? 'N/A' }}</td>
                            <td>{{ $record->robot->robot_name ?? 'N/A' }}</td>
                            <td>{{ \Carbon\Carbon::parse($record->maintenance_date)->format('M d, Y') }}</td>
                            <td>{{ Str::limit($record->description, 40) }}</td>
                            <td>
                                <span class="badge badge-info">
                                    ${{ number_format($record->cost, 2) }}
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.maintenance-records.show', $record->id) }}" class="btn btn-outline-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.maintenance-records.edit', $record->id) }}" class="btn btn-outline-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.maintenance-records.destroy', $record->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">No maintenance records found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
