@extends('adminlte::page')


@section('title', 'Compose Mail')

@section('content_header')
    <h1>Compose</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-3">
        <a href="{{ url('inbox') }}" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

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
                    <li class="nav-item">
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

    <!-- Compose form -->
    <div class="col-md-9">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Compose New Message</h3>
            </div>
            <!-- /.card-header -->
            <form method="POST" action="#" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <input class="form-control" placeholder="To:">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Subject:">
                    </div>
                    <div class="form-group">
                        <textarea id="compose-textarea" class="form-control" style="height: 300px">
Hello, this is a sample message.
                        </textarea>
                    </div>
                    <div class="form-group">
                        <div class="btn btn-default btn-file">
                            <i class="fas fa-paperclip"></i> Attachment
                            <input type="file" name="attachment">
                        </div>
                        <p class="help-block">Max. 32MB</p>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="far fa-envelope"></i> Send
                        </button>
                        <button type="button" class="btn btn-default">
                            <i class="fas fa-pencil-alt"></i> Draft
                        </button>
                    </div>
                    <button type="reset" class="btn btn-default">
                        <i class="fas fa-times"></i> Discard
                    </button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>
</div>
@stop
