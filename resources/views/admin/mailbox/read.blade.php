@extends('adminlte::page')

@section('title', 'Read Mail')

@section('content_header')
    <h1>Read Mail</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-3">
        <a href="{{ url('compose') }}" class="btn btn-primary btn-block mb-3">Compose</a>

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
                </ul>
            </div>
        </div>
    </div>

    <!-- Read email -->
    <div class="col-md-9">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Read Message</h3>
                <div class="card-tools">
                    <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="mailbox-read-info p-3">
                    <h5>AdminLTE 3.0 Issue - Trying to find a solution to this problem...</h5>
                    <h6>From: alexander@example.com
                        <span class="mailbox-read-time float-right">15 Feb. 2024 11:03 AM</span>
                    </h6>
                </div>
                <!-- /.mailbox-read-info -->
                <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete">
                            <i class="far fa-trash-alt"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Reply">
                            <i class="fas fa-reply"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Forward">
                            <i class="fas fa-share"></i>
                        </button>
                    </div>
                </div>
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message p-3">
                    <p>Hello Raneem,</p>
                    <p>We noticed that you're having an issue with the AdminLTE 3.0 interface. Please provide us with the steps to reproduce this and any relevant screenshots. We're working to resolve this as soon as possible.</p>
                    <p>Thanks,<br>Admin Support Team</p>
                </div>
                <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-white">
                <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                    <li>
                        <span class="mailbox-attachment-icon"><i class="far fa-file-pdf"></i></span>
                        <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> issue_report.pdf</a>
                            <span class="mailbox-attachment-size clearfix mt-1">
                                1.2 MB
                                <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.card-footer -->
            <div class="card-footer">
                <div class="float-right">
                    <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Reply</button>
                    <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward</button>
                </div>
                <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button>
                <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </div>
</div>
@stop
