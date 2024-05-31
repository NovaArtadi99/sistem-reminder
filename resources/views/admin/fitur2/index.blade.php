<!-- resources/views/admin/fitur_permudah/index.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Title - {{ $fitur[0]->title ?? '' }}</h1>
        </section>

        <section class="content">
            <form action="{{ route('optimal.update', $fitur[0]->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{ $fitur[0]->title ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="subtitle">Sub Title:</label>
                    <input type="text" name="subtitle" class="form-control" value="{{ $fitur[0]->subtitle?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control" rows="3" required>{{ $fitur[0]->description ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="register">Register:</label>
                    <textarea name="register" class="form-control" rows="3" required>{{ $fitur[0]->register ?? '' }}</textarea>
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
