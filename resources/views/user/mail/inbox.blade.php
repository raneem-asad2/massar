@extends('adminlte::page')

@section('title', 'Inbox')
@section('content_header')
    <h1>Inbox</h1>
@stop

@section('content')
<div class="row">
    <!-- Left sidebar (folders + labels) -->
    <div class="col-md-3">
        <a href="{{ url('user/compose') }}" class="btn btn-primary btn-block mb-3">Compose</a>

        <div class="card">
            <div class="card-header"><h3 class="card-title">Folders</h3></div>
            <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item active">
                        <a href="{{ url('user/inbox') }}" class="nav-link">
                            <i class="fas fa-inbox"></i> Inbox
                            <span class="badge bg-primary float-right">12</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('user/sent') }}" class="nav-link">
                            <i class="far fa-envelope"></i> Sent
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-file-alt"></i> Drafts
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Right side mailbox -->
    <div class="col-md-9">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Inbox</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Search Mail">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover">
                        <tbody>
                        @for($i = 0; $i < 8; $i++)
                            <tr>
                                <td><input type="checkbox"></td>
                                <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                <td class="mailbox-name"><a href="#">Alexander Pierce</a></td>
                                <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Sample message content...</td>
                                <td class="mailbox-date">{{ now()->subHours($i * 3)->diffForHumans() }}</td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
