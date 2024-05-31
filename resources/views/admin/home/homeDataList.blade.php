<!-- resources/views/admin/home/edit.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>{{ $pageTitle }} - {{ $data[0]->title_home ?? '' }}</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.home.update', $data[0]->id_home ?? '') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title_home">Title:</label>
                    <input type="text" name="title_home" class="form-control" value="{{ $data[0]->title_home ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="title_home">Sub Title:</label>
                    <input type="text" name="subtitle_home" class="form-control" value="{{ $data[0]->subtitle_home ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="description_home">Description:</label>
                    <textarea name="description_home" class="form-control" rows="3" required>{{ $data[0]->description_home ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image_home">Image: {{ $data[0]->image_home }}</label>
                    <input type="file" name="image_home" class="form-control-file">
                        <img src="{{ asset('/storage/public/' . $data[0]->image_home) }}" width="50" alt="Current Image">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
