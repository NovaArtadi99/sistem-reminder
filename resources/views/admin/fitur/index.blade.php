<!-- resources/views/admin/fitur/index.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>{{ $pageTitle }}</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.fitur.update', $fiturs[0]->id_fitur) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="fitur_title">Title:</label>
                    <input type="text" name="fitur_title" class="form-control" value="{{ $fiturs[0]->fitur_title ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="fitur_subtitle">Sub Title:</label>
                    <input type="text" name="fitur_subtitle" class="form-control" value="{{ $fiturs[0]->fitur_subtitle?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="fitur_description">Description:</label>
                    <textarea name="fitur_description" class="form-control" rows="3" required>{{ $fiturs[0]->fitur_description ?? '' }}</textarea>
                </div>

                {{-- <div class="form-group">
                    <label for="image_home">Image: {{ $data[0]->image_home }}</label>
                    <input type="file" name="image_home" class="form-control-file">
                        <img src="{{ asset('/storage/public/' . $data[0]->image_home) }}" width="50" alt="Current Image">
                </div> --}}
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
