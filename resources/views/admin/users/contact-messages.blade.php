@extends('adminlte::page')

@section('title', 'Contact Messages')

@section('content_header')
    <h1>Contact Messages</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Inbox</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Received</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Potential Client Corp</td>
                        <td>client@example.com</td>
                        <td>Inquiry about service</td>
                        <td>2025-08-22 10:30 AM</td>
                        <td><span class="badge bg-primary">New</span></td>
                        <td><a href="#" class="btn btn-xs btn-info">Read Message</a></td>
                    </tr>
                     <tr>
                        <td>2</td>
                        <td>Local Resident</td>
                        <td>resident@email.com</td>
                        <td>Question about night operations</td>
                        <td>2025-08-21 04:15 PM</td>
                        <td><span class="badge bg-secondary">Read</span></td>
                        <td><a href="#" class="btn btn-xs btn-info">Read Message</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop