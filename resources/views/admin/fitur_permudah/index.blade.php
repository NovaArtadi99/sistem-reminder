<!-- resources/views/admin/fitur_permudah/index.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Permudah Reminder Pasien</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.reminder.update', $rmd[0]->id_reminder) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title_reminder">Title:</label>
                    <input type="text" name="title_reminder" class="form-control" value="{{ $rmd[0]->title_reminder ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="subtitle_reminder">Sub Title:</label>
                    <input type="text" name="subtitle_reminder" class="form-control" value="{{ $rmd[0]->subtitle_reminder ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="description_reminder">Description:</label>
                    <textarea name="description_reminder" class="form-control" rows="3" required>{{ $rmd[0]->description_reminder ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="list1">List 1:</label>
                    <textarea name="list1" class="form-control" rows="3" required>{{ $rmd[0]->list1 ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="description_reminder">List 2:</label>
                    <textarea name="description_reminder" class="form-control" rows="3" required>{{ $rmd[0]->description_reminder ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="description_reminder">List 3:</label>
                    <textarea name="description_reminder" class="form-control" rows="3" required>{{ $rmd[0]->description_reminder ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="description_reminder">List 4:</label>
                    <textarea name="description_reminder" class="form-control" rows="3" required>{{ $rmd[0]->description_reminder ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="reminder_image">Image: {{ $rmd[0]->image_home }}</label>
                    <input type="file" name="reminder_image" class="form-control-file">
                        <img src="{{ asset('/storage/public/' . $rmd[0]->reminder_image) }}" width="50" alt="Current Image">
                </div>

                <div class="form-group">
                    <label for="register">Register:</label>
                    <textarea name="register" class="form-control" rows="3" required>{{ $rmd[0]->register ?? '' }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
