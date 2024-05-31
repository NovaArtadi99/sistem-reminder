<!-- resources/views/admin/fitur_app/edit.blade.php -->
@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit {{ $pageTitle }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('app.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit {{ $pageTitle }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('app.update', ['id' => $fiturapp->id_fitur]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="fitur_app_title">Title:</label>
                                <input type="text" name="fitur_app_title" class="form-control"
                                    value="{{ $fiturapp->fitur_app_title }}" required>
                            </div>

                            <div class="form-group">
                                <label for="fitur_app_image">Description:</label>
                                <textarea name="fitur_app_image" class="form-control" rows="5" required>{{ $fiturapp->fitur_app_image }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="fitur_app_image">Image:</label>
                                <input type="file" name="fitur_app_image" class="form-control-file">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
