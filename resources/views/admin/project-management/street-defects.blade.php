@extends('adminlte::page')

@section('title', 'Street Defects')

@section('content_header')
    <h1 class="font-weight-bold">Street Defects</h1>
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
            <h3 class="card-title mb-0 font-weight-bold text-dark">Reported Defects</h3>
            <a href="{{ route('admin.street-defects.create') }}" class="btn btn-outline-primary btn-sm px-3">
                <i class="fas fa-plus mr-1"></i> Report New Defect
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th>Segment</th>
                            <th>Defect Type</th>
                            <th>Location</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($defects as $defect)
                        <tr>
                            <td>{{ $defect->segment ? $defect->segment->segment_name : 'N/A' }}</td>
                            <td>{{ $defect->defect_type }}</td>
                            <td>{{ $defect->location }}</td>
                            <td>
                                @if ($defect->image)
                                    <a href="{{ asset('storage/' . $defect->image) }}" 
                                       target="_blank" 
                                       class="btn btn-sm btn-outline-info">
                                        <i class="fas fa-image mr-1"></i> View
                                    </a>
                                @else
                                    <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td>
                                @php
                                    $statusClass = match($defect->status) {
                                        'Repaired' => 'badge-success',
                                        'Pending Inspection' => 'badge-warning',
                                        'Requires Action' => 'badge-danger',
                                        default => 'badge-secondary',
                                    };
                                @endphp
                                <span class="badge {{ $statusClass }}">{{ $defect->status }}</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.street-defects.show', $defect->id) }}" class="btn btn-outline-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.street-defects.edit', $defect->id) }}" class="btn btn-outline-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.street-defects.destroy', $defect->id) }}" 
                                          method="POST" 
                                          onsubmit="return confirm('Are you sure you want to delete this defect?');">
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
                            <td colspan="6" class="text-center text-muted">No defects reported yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
