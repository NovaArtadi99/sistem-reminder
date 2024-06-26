<!-- resources/views/admin/fitur_app/create.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create New {{ $pageTitle }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.index') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Create New {{ $pageTitle }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('app.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="fitur_app_title">Title:</label>
                                <input type="text" name="fitur_app_title" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="fitur_app_description">Description:</label>
                                <textarea name="fitur_app_description" class="form-control" rows="5" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="fitur_app_image">Image:</label>
                                <input type="file" name="fitur_app_image" class="form-control-file">
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
