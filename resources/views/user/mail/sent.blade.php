@extends('adminlte::page')

@section('title', 'Sent Mail')
@section('content_header')
    <h1>Sent Mail</h1>
@stop

@section('content')
<div class="row">
    <!-- Left sidebar (folders + labels) -->
    <div class="col-md-3">
        <a href="{{ route('user.mail.compose') }}" class="btn btn-primary btn-block mb-3">Compose</a>

        <div class="card">
            <div class="card-header"><h3 class="card-title">Folders</h3></div>
            <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="{{ route('user.mail.inbox') }}" class="nav-link">
                            <i class="fas fa-inbox"></i> Inbox
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ route('user.mail.sent') }}" class="nav-link">
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
                <h3 class="card-title">Sent Messages</h3>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover">
                        <tbody>
                        @for($i = 0; $i < 5; $i++)
                            <tr>
                                <td><input type="checkbox"></td>
                                <td class="mailbox-name"><a href="#">Recipient {{ $i+1 }}</a></td>
                                <td class="mailbox-subject"><b>Sample Subject</b> - Sample sent message...</td>
                                <td class="mailbox-date">{{ now()->subHours($i * 2)->diffForHumans() }}</td>
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
