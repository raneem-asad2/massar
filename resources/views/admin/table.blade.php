@extends('adminlte::page')

@section('title', 'Table')

@section('content_header')
    <h1>Data Table</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Simple Table Example</h3>

        <div class="card-tools">
            <form method="GET" action="">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="max-height: 400px;">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Raneem As'ad</td>
                    <td>raneem@example.com</td>
                    <td>Admin</td>
                    <td><span class="badge badge-success">Active</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>Editor</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>User</td>
                    <td><span class="badge badge-danger">Blocked</span></td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@stop
