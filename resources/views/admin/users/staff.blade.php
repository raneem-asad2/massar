@extends('adminlte::page')

@section('title', 'Staff Management')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="font-weight-bold">Staff List</h1>
        <a href="{{ route('admin.staff.create') }}" class="btn btn-outline-primary btn-sm shadow-sm">
            <i class="fas fa-user-plus mr-1"></i> Add Staff
        </a>
    </div>
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
        <div class="card-header bg-white">
            <h3 class="card-title mb-0">All Staff Members</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Job Title</th>
                            <th>Role</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($staff as $s)
                            <tr>
                                <td>{{ $s->id }}</td>
                                <td>{{ $s->name }}</td>
                                <td>{{ $s->email }}</td>
                                <td>{{ $s->phone }}</td>
                                <td>{{ $s->job_title }}</td>
                                <td>
                                    @if ($s->role)
                                        <span class="badge badge-info">{{ $s->role }}</span>
                                    @else
                                        <span class="badge badge-secondary">Unassigned</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.staff.show', $s->id) }}" class="btn btn-outline-info btn-sm mr-1">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.staff.edit', $s->id) }}" class="btn btn-outline-warning btn-sm mr-1">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.staff.destroy', $s->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this staff member?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">No staff members found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
