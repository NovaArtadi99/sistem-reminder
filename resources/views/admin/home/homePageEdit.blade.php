@extends('admin/general/layout')

@section('js_lib')
@endsection

@section('body')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $pageTitle }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{ $pageTitle }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <x-language-switcher />
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Page</h3>
                        </div>
                        <form action="{{ route('') }}"
                            method="post"
                            class="form-send"
                            enctype="multipart/form-data"
                            data-alert-show="true"
                            data-alert-field-message="false"
                            data-page-reload="false"
                            data-alert-show-success-status="true">
                            {{ csrf_field() }}

                            <input type="hidden" name="language_id" value="{{ $language_id }}">

                            <div class="card-body">
                                <div class="p1-x1-0">
                                    <div class="form-group">
                                        <label>Menu Name</label>
                                        <input type="text" name="menu" value="{{ $row->menu }}" class="form-control">
                                    </div>
                                </div>
                                <h4>Section Home</h4>
                                <hr/>
                                <div class="form-group">
                                    <label>Product Title</label>
                                    <input type="text" name="hom_product_title" value="{{ $row->hom_product_title }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Product Description</label>
                                    <textarea name="hom_product_description" class="form-control tinymce">{{ $row->hom_product_description }}</textarea>
                                    </div>

                                <div class="card-body">
                                    <div class="p1-x1-0">
                                        <div class="form-group">
                                        <label>Image</label>
                                        <input type="img" name="hom_product_image" value="{{ $row->hom_product_image }}" class="form-control">
                                    </div>
                                <h4 class="mt-5">SEO Page</h4>
                                <hr/>
                                <div class="p1-x1-4">
                                    <div class="form-group">
                                        <label>Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control" value="{{ $row->meta_title ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea name="meta_description" class="form-control">{{ $row->meta_description ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
