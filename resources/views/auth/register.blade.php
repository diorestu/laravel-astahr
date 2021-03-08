@extends('layouts.auth')

@section('content')
<div class="d-flex flex-column flex-root">
    <div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="login-aside d-flex flex-column flex-row-auto">
            <div class="d-flex flex-column-auto flex-column pt-lg-30 pt-15">
                <a href="" class="login-logo text-center pb-4">
                    <img src="assets/media/logos/logo-kotak.png" class="max-h-70px" alt="" />
                </a>
                <h3 class="font-weight-bolder text-center font-size-h4 text-dark-50 line-height-xl">Asta HR Management</h3>
                <p class="text-center font-size-h5 text-dark-50">Your Human Resources Solutions</p>
            </div>
            <div class="text-center">
                <img class="img-fluid pt-4 mt-2" src="/assets/media/svg/illustrations/data-points.svg" width="450px" alt="Banner Aside">
            </div>
            <p class="text-muted text-center text-dark-25 pt-4 mt-2">2021 © Asta Pijar Kreasi Teknologi</p>
        </div>
        <div class="login-content flex-row-fluid d-flex flex-column" >
            <div class="d-flex flex-row-fluid flex-center pt-2">
                <div class="login-form" id="register">
                    <form class="form" action="{{ route('register') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="pb-4 mb-2">
                            <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Registrasi</h3>
                        </div>
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Nama Pengguna</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Email Pengguna</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Kata Sandi</label>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label for="password-confirm" class="font-size-h6 font-weight-bolder text-dark pt-5">Konfirmasi Kata Sandi</label>
                            </div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>
                        <div class="pb-lg-0 pb-5">
                            <button
                            type="submit"
                            class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3"
                            :disabled="this.email_unavailable"
                            >{{ __('Register') }}</button>
                            
                            <a href="{{ route('login') }}" class="btn btn-info font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
                            Kembali ke Sign In
                        </a>
                        </div>
                    </form>
                </div>
                {{-- <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form> --}}
            </div>
        </div>
    </div>

@endsection

