@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>{{ $pageTitle }}</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.contact.update', ['id' => $contacts[0]->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $contacts[0]->name ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="telepon">No Telepon:</label>
                    <input type="text" name="telepon" class="form-control" value="{{ $contacts[0]->telepon?? '' }}" required>
                </div>

                <div class="email">Email:</label>
                    <textarea name="email" class="form-control" rows="3" required>{{ $contacts[0]->email?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" class="form-control" rows="3" required>{{ $contacts[0]->alamat ?? '' }}</textarea>
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
