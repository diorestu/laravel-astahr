@extends('layouts.auth')

@push('addon-style')
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endpush

@section('content')
<div class="d-flex flex-column flex-root">
    <div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid">
        {{-- <div class="login-aside d-flex flex-column flex-row-auto d-sm-none">
            <div class="d-flex flex-column-auto flex-column pt-lg-30 pt-15" data-aos="fade-up" data-aos-delay="50">
                <a href="#" class="login-logo text-center pb-4">
                    <img src="assets/media/logos/logo-kotak.png" class="max-h-70px" alt="" />
                </a>
                <h3 class="font-weight-bolder text-center font-size-h4 text-dark-50 line-height-xl">Asta HR Management</h3>
                <p class="text-center font-size-h5 text-dark-50">Your Human Resources Solutions</p>
            </div>
            <div class="text-center">
                <img class="img-fluid pt-4 mt-2" src="/assets/media/svg/illustrations/data-points.svg" width="300px" alt="Banner Aside">
            </div>
            <p class="text-muted text-center text-dark-25 pt-4 mt-2">2021 © Asta Pijar Kreasi Teknologi</p>
        </div> --}}
        <div class="login-content flex-row-fluid d-flex flex-column ">
            <div class="d-flex flex-row-fluid flex-center bg-gray-200 0-20">
                    <div class="login-form">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="pb-4 mb-2">
                                <h3 class="font-weight-bolder text-dark text-center font-size-h2 font-size-h1-lg">Asta HR Solution</h3>
                                @error('email')
                                    <div class="alert alert-custom alert-light-warning fade show mt-4" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                        <div class="alert-text">Email Pengguna atau Kata Sandi yang anda masukkan tidak tepat!</div>
                                    </div>
                                @enderror
                                @error('password')
                                    <div class="alert alert-custom alert-light-danger fade show mt-4" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                        <div class="alert-text">{{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Email Pengguna</label>
                                <div class="input-icon">
                                <input id="email" type="email" class="form-control h-auto py-4 px-4 pl-15 rounded-lg border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="ml-2"><i class="fas fa-user icon-lg"></i></span>
                                
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Nama Pengguna</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="flaticon2-user icon-md"></i>
                                        </span>
                                        
                                    </div>
                                    <input id="email" type="email" class="form-control h-auto py-4 px-4 rounded-lg border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Kata Sandi</label>
                                <div class="input-icon">
                                <input id="password" type="password" class="form-control h-auto py-4 px-4 pl-15 rounded-lg border-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">                                    
                                <span class="ml-2"><i class="fas fa-lock icon-lg"></i></span>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="pb-lg-0 pb-5">
                                <button type="submit" class="btn btn-primary btn-block font-weight-bold font-size-h6 px-8 py-4 mr-4 mb-4">Masuk</button>
                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Lupa Kata Sandi?') }}
                                    </a>
                                @endif --}}
                            </div>
                            <div class="">
                                <a href="{{ url('login/google') }}"  class="btn btn-outline-primary btn-block font-weight-bolder px-8 py-4 mr-4 font-size-lg">
                                    <span class="svg-icon svg-icon-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M19.9895 10.1871C19.9895 9.36767 19.9214 8.76973 19.7742 8.14966H10.1992V11.848H15.8195C15.7062 12.7671 15.0943 14.1512 13.7346 15.0813L13.7155 15.2051L16.7429 17.4969L16.9527 17.5174C18.879 15.7789 19.9895 13.221 19.9895 10.1871Z" fill="#4285F4" />
                                        <path d="M10.1993 19.9313C12.9527 19.9313 15.2643 19.0454 16.9527 17.5174L13.7346 15.0813C12.8734 15.6682 11.7176 16.0779 10.1993 16.0779C7.50243 16.0779 5.21352 14.3395 4.39759 11.9366L4.27799 11.9466L1.13003 14.3273L1.08887 14.4391C2.76588 17.6945 6.21061 19.9313 10.1993 19.9313Z" fill="#34A853" />
                                        <path d="M4.39748 11.9366C4.18219 11.3166 4.05759 10.6521 4.05759 9.96565C4.05759 9.27909 4.18219 8.61473 4.38615 7.99466L4.38045 7.8626L1.19304 5.44366L1.08875 5.49214C0.397576 6.84305 0.000976562 8.36008 0.000976562 9.96565C0.000976562 11.5712 0.397576 13.0882 1.08875 14.4391L4.39748 11.9366Z" fill="#FBBC05" />
                                        <path d="M10.1993 3.85336C12.1142 3.85336 13.406 4.66168 14.1425 5.33717L17.0207 2.59107C15.253 0.985496 12.9527 0 10.1993 0C6.2106 0 2.76588 2.23672 1.08887 5.49214L4.38626 7.99466C5.21352 5.59183 7.50242 3.85336 10.1993 3.85336Z" fill="#EB4335" />
                                    </svg>
                                    <strong> &nbsp; Masuk dengan Google</strong>
                                </a> 

                                <a type="button" href="{{ route('register') }}" class="btn btn-light-success btn-block font-weight-bolder px-8 py-4 my-4 font-size-lg">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('addon-script')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endpush
