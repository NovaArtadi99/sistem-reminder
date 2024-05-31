<!-- resources/views/admin/akses_gadget/index.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Akses Melalui Gadget</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.akses.update', $gadgets[0]->id_akses ?? '') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title_akses">Title:</label>
                    <input type="text" name="title_akses" class="form-control" value="{{ $gadgets[0]->title_akses ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="subtitle_akses">Sub Title:</label>
                    <input type="text" name="subtitle_akses" class="form-control" value="{{ $gadgets[0]->subtitle_akses ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="description_akses">Description:</label>
                    <textarea name="description_akses" class="form-control" rows="3" required>{{ $gadgets[0]->description_akses ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="teks1">Teks 1:</label>
                    <textarea name="teks1" class="form-control" rows="3" required>{{ $gadgets[0]->teks1 ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="teks2">Teks 2:</label>
                    <textarea name="teks2" class="form-control" rows="3" required>{{ $gadgets[0]->teks2 ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image_akses">Image: {{ $gadgets[0]->image_akses }}</label>
                    <input type="file" name="image_akses" class="form-control-file">
                        <img src="{{ asset('/storage/public/' . $gadgets[0]->image_aksses) }}" width="50" alt="Current Image">
                </div>

                <div class="form-group">
                    <label for="register_akses">Register:</label>
                    <textarea name="register_akses" class="form-control" rows="3" required>{{ $gadgets[0]->register_akses ?? '' }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
