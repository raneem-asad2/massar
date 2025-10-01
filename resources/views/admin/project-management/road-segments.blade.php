@extends('adminlte::page')

@section('title', 'Road Segments')

@section('content_header')
    <h1 class="font-weight-bold">Road Segments</h1>
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
            <h3 class="card-title mb-0 font-weight-bold text-dark">Mapped Road Segments</h3>
            <a href="{{ route('admin.road-segments.create') }}" class="btn btn-outline-primary btn-sm px-3">
                <i class="fas fa-plus mr-1"></i> Add New Segment
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th>Project</th>
                            <th>Segment Name</th>
                            <th>Status</th>
                            <th>Line Type</th>
                            <th>Description</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($segments as $segment)
                        <tr>
                            <td>{{ $segment->project ? $segment->project->project_name : 'N/A' }}</td>
                            <td>{{ $segment->segment_name }}</td>
                            <td>
                                @php
                                    $statusClass = match($segment->status) {
                                        'Completed' => 'badge-success',
                                        'In Progress' => 'badge-primary',
                                        'Pending' => 'badge-warning',
                                        default => 'badge-secondary',
                                    };
                                @endphp
                                <span class="badge {{ $statusClass }}">{{ $segment->status }}</span>
                            </td>
                            <td>{{ $segment->line_type }}</td>
                            <td>{{ $segment->description ?? 'N/A' }}</td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.road-segments.show', $segment->id) }}" class="btn btn-outline-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.road-segments.edit', $segment->id) }}" class="btn btn-outline-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.road-segments.destroy', $segment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this segment?');">
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
                            <td colspan="6" class="text-center text-muted">No road segments found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
