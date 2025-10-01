@extends('adminlte::page')

@section('title', 'Contact Messages')

@section('content_header')
    <h1 class="font-weight-bold">Contact Messages</h1>
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
            <h3 class="card-title mb-0">Inbox</h3>
            <a href="{{ route('admin.contact-messages.create') }}" class="btn btn-outline-primary btn-sm">
                <i class="fas fa-plus mr-1"></i> New Message
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Received</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($messages as $message)
                            <tr>
                                <td>{{ $message->id }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ Str::limit($message->message_text, 40) }}</td>
                                <td>{{ $message->created_at->format('M d, Y h:i A') }}</td>
                                <td>
                                    @php
                                        $statusClass = $message->status === 'new' ? 'badge-primary' : 'badge-secondary';
                                    @endphp
                                    <span class="badge {{ $statusClass }}">
                                        {{ ucfirst($message->status ?? 'new') }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.contact-messages.show', $message->id) }}" class="btn btn-outline-info btn-sm mr-1">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.contact-messages.edit', $message->id) }}" class="btn btn-outline-warning btn-sm mr-1">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.contact-messages.destroy', $message->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this message?');">
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
                                <td colspan="7" class="text-center text-muted">No messages found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
