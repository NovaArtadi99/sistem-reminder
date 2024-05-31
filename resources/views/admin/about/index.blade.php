@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>{{ $pageTitle }}</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.about.update', ['id' => $abouts[0]->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{ $abouts[0]->title ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" class="form-control" value="{{ $abouts[0]->description ?? '' }}"
                        required>
                </div>

                <div class="buttom1">Buttom Url:</label>
                    <textarea name="buttom1" class="form-control" rows="3" required>{{ $abouts[0]->buttom1 ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="buttom2">Buttom Url:</label>
                    <textarea name="buttom2" class="form-control" rows="3" required>{{ $abouts[0]->buttom2 ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $abouts[0]->name ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="list1">List 1:</label>
                    <input type="text" name="list1" class="form-control" value="{{ $abouts[0]->list ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="list2">List 2:</label>
                    <input type="text" name="list2" class="form-control" value="{{ $abouts[0]->list2 ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="list3">List 3:</label>
                    <input type="text" name="list3" class="form-control" value="{{ $abouts[0]->list3 ?? '' }}" required>
                </div>

                <div class="form-group">
                    <label for="list4">List 4:</label>
                    <input type="text" name="list4" class="form-control" value="{{ $abouts[0]->list4 ?? '' }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="list5">List 5:</label>
                    <input type="text" name="list5" class="form-control" value="{{ $abouts[0]->list5 ?? '' }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="list6">List 6:</label>
                    <input type="text" name="list6" class="form-control" value="{{ $abouts[0]->list6 ?? '' }}"
                        required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
