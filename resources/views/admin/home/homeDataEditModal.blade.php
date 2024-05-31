<!-- resources/views/admin/home/edit.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Home Page - {{ $home[0]->title_home }}</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.admin.home.update', $home[0]->id_home) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title_home">Title:</label>
                    <input type="text" name="title_home" class="form-control" value="{{ $home[0]->title_home }}" required>
                </div>

                <div class="form-group">
                    <label for="description_home">Description:</label>
                    <textarea name="description_home" class="form-control" rows="3" required>{{ $home[0]->description_home}}</textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image: {{ $home[0]->image }}</label>
                    <input type="file" name="home_image" class="form-control-file">
                    <img src="{{ asset('/storage/public/' . $home[0]->image) }}" width="50" alt="Current Image">
                    {{-- <img src="/storage/public/" width="50" alt="Current Image"> --}}
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
