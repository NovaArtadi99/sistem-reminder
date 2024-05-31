@extends('admin/general/layout')

@section('css_lib')
    <link rel="stylesheet"
        href="../storage/public/assets/template_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="../storage/public/assets/template_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="../storage/public/assets/template_admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('js_lib')
    <script src="../storage/public/assets/template_admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../storage/public/assets/template_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../storage/public/assets/template_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="../storage/public/assets/template_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <script src="../storage/public/assets/template_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../storage/public/assets/template_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../storage/public/assets/template_admin/plugins/jszip/jszip.min.js"></script>
    <script src="../storage/public/assets/template_admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../storage/public/assets/template_admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../storage/public/assets/template_admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../storage/public/assets/template_admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../storage/public/assets/template_admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
@endsection

@section('js_custom')
@endsection

@section('content')
    @include('admin.home.testimoni.testimoniDataCreate')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $pageTitle }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboardPage') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">{{ $pageTitle }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <x-language-switcher />
                        <div class="card">
                            <div class="card-header">
                                <div class="float-left">

                                </div>
                                <div class="float-right">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#modal-create">
                                        <i class="fas fa-plus"></i> Add New Data
                                    </button>
                                </div>

                            </div>
                            <div class="card-body">

                                <table class="datatable table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20">No</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th width="80">Menu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list as $key => $row)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $row->testi_name }}</td>
                                                <td>{!! $row->testi_description !!}</td>
                                                <td>
                                                    <div class="btn-group dropleft">
                                                        <button class="btn btn-success dropdown-toggle" type="button"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            Menu
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item btn-modal-general"
                                                                data-route="{{ route('testimoniDataEdit', ['testimoni_id' => $row->testimoni_id]) }}"
                                                                href="#">
                                                                Edit
                                                            </a>
                                                            <a class="dropdown-item btn-confirm-general" href="#"
                                                                data-route="{{ route('testimoniDataDelete', ['testimoni_id' => $row->testimoni_id]) }}"
                                                                data-message-title="Please Attention ?"
                                                                data-message-message="Are you sure to delete this data ?"
                                                                data-message-type="warning">
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
