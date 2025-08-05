@extends('adminlte::page')


@section('title', 'Users')

@section('content_header')
    <h1 class="mb-4">User Management</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">All Users</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Example users --}}
                    <tr>
                        <td>1</td>
                        <td>Raneem Asad</td>
                        <td>raneem@example.com</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td><span class="badge bg-info">Admin</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                        <td><span class="badge bg-danger">Banned</span></td>
                        <td><span class="badge bg-secondary">User</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
