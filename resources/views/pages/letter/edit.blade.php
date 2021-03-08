@extends('layouts.admin')

@section('title')
    Ubah Data Invoice - Asta HR
@endsection

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
                                <a href="" class="text-muted">Ubah Data Invoice</a>
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
                            <div class="card-header">
                                <h3 class="card-title font-weight-bolder text-dark">Ubah Data Invoice</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form action="{{ route('letter.update', $item->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        @php
                                                            $month = Carbon\Carbon::now();
                                                        @endphp
                                                        <label>Nomor Surat</label>
                                                        <input type="text" class="form-control form-control-solid text-muted"
                                                        name="nomor" value="1.0{{ $item->nomor }}/ASTA/INV/{{ $month->month }}/{{ date('Y') }}" autocomplete readonly/>
                                                        
                                                    </input>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tujuan</label>
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="tujuan" value="{{ $item->tujuan }}" autocomplete />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleTextarea">Deskripsi</label>
                                                        <textarea class="form-control form-control-solid" rows="3"
                                                            name="deskripsi" required>{{ $item->deskripsi }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col text-right">
                                                    <button type="submit" class="btn btn-success px-5 mr-2">
                                                        Simpan
                                                    </button>
                                                    <a type="reset" href="{{ route('letter.index') }}" class="btn btn-default px-6">
                                                        Batal
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
