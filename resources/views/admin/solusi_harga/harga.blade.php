<!-- resources/views/admin/fitur_paket/index.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Title - {{ $hargas[0]->title_hrg ?? '' }}</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.solusi.update', $hargas[0]->id_hrg) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title_hrg">Title:</label>
                    <input type="text" name="title_hrg" class="form-control" value="{{ $hargas[0]->title_hrg ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="subtitle_hrg">Sub Title:</label>
                    <input type="text" name="subtitle_hrg" class="form-control" value="{{ $hargas[0]->subtitle_hrg ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="description_hrg">Description:</label>
                    <textarea name="description_hrg" class="form-control" rows="3" required>{{ $hargas[0]->description_hrg ?? '' }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
