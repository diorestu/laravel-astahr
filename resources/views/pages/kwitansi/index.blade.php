@extends('layouts.admin')

@section('title')
    Data Kwitansi - Asta HR
@endsection

@push('addon-style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/sl-1.3.1/datatables.min.css"/>
@endpush

@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div data-aos="zoom-in" class="d-flex align-items-baseline mr-5">
                    <ul class="breadcrumb breadcrumb-transparent font-weight-200 breadcrumb-dot p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">Data Kwitansi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    

    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom card-stretch gutter-b">
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">Data Kwitansi</h3>
                            <div class="card-toolbar">
                                <a href="{{ route('kwitansi.create') }}" type="button" class="btn btn-sm btn-shadow btn-success mr-2">Tambah Data</a>
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-ver"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-drop"></i>
                                                    </span>
                                                    <span class="navi-text">Ekspor Data PDF</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-list-3"></i>
                                                    </span>
                                                    <span class="navi-text">Ekspor Data XLS</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Impor Data</span>
                                                    <span class="navi-link-badge">
                                                        <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-bell-2"></i>
                                                    </span>
                                                    <span class="navi-text">Cetak</span>
                                                </a>
                                            </li>
                                            
                                            <li class="navi-separator"></li>
                                            <li class="navi-item pt-2">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-magnifier-tool"></i>
                                                    </span>
                                                    <span class="navi-text">Bantuan</span>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="crudTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nomor</th>
                                        <th>Tujuan</th>
                                        <th>Perihal</th>
                                        <th>Pengirim</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

</div>
<!--end::Content-->
@endsection

@push('addon-script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/sl-1.3.1/datatables.min.js"></script>
    <script>
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({
            // processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'nomor', name: 'nomor' },
                { data: 'tujuan', name: 'tujuan' },
                { data: 'deskripsi', name: 'deskripsi' },
                { data: 'user.name', name: 'user.name' },

                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '7%'
                },
            ]
        });
    </script>
@endpush


