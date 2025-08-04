@extends('adminlte::page')

@section('title', 'Inbox')

@section('content_header')
    <h1>Inbox</h1>
@stop

@section('content')
<div class="row">
    <!-- Left side column -->
    <div class="col-md-3">
        <a href="#" class="btn btn-primary btn-block mb-3">Compose</a>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Folders</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">
                            <i class="fas fa-inbox"></i> Inbox
                            <span class="badge bg-primary float-right">12</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-envelope"></i> Sent
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-file-alt"></i> Drafts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-filter"></i> Junk
                            <span class="badge bg-warning float-right">65</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-trash-alt"></i> Trash
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Labels</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle text-danger"></i> Important
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle text-warning"></i> Promotions
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle text-primary"></i> Social
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Right side column -->
    <div class="col-md-9">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Inbox</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Search Mail">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="mailbox-controls px-2 py-2">
                    <!-- Controls (checkbox, refresh, etc) -->
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="far fa-square"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fas fa-reply"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fas fa-share"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fas fa-sync-alt"></i>
                    </button>

                    <div class="float-right">
                        1-50/200
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover">
                        <tbody>
                        @for($i = 0; $i < 8; $i++)
                            <tr>
                                <td><input type="checkbox"></td>
                                <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                <td class="mailbox-name"><a href="#">Alexander Pierce</a></td>
                                <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...</td>
                                <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                <td class="mailbox-date">{{ now()->subHours($i * 3)->diffForHumans() }}</td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
@stop
