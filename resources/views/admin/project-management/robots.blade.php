@extends('adminlte::page')

@section('title', 'Robot Management')

@section('content_header')
    <h1 class="font-weight-bold">Robot Management</h1>
@stop

@section('content')
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

     <div class="card shadow-sm border-0">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0 font-weight-bold text-dark">All Robots</h3>
        <a href="{{ route('admin.robots.create') }}" class="btn btn-outline-primary btn-sm px-3">
            <i class="fas fa-plus mr-1"></i> Add New Robot
        </a>
    </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Charge Level (%)</th>
                                <th>Paint Level (%)</th>
                                <th>Status</th>
                                <th>Location</th>
                                <th>Serial Number</th>
                                <th>Last Maintenance</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($robots as $robot)
                                <tr>
                                    <td>{{ $robot->robot_name }}</td>
                                    <td>{{ $robot->charge_level ?? 'N/A' }}</td>
                                    <td>{{ $robot->paint_level ?? 'N/A' }}</td>
                                    <td>
                                        <span class="badge badge-secondary">{{ ucfirst($robot->robot_status) }}</span>
                                    </td>
                                    <td>{{ $robot->current_location ?? 'N/A' }}</td>
                                    <td>{{ $robot->serial_number }}</td>
                                    <td>{{ $robot->last_maintenance_date ? \Carbon\Carbon::parse($robot->last_maintenance_date)->format('M d, Y') : 'N/A' }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.robots.show', $robot->id) }}" class="btn btn-outline-info btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.robots.edit', $robot->id) }}" class="btn btn-outline-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.robots.destroy', $robot->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this robot?');">
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
                                    <td colspan="8" class="text-center text-muted">No robots found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
