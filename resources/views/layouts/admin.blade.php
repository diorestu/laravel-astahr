
<!DOCTYPE html>
<html lang="en">
	<head><base href="../../">
	
	@stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

	<title>@yield('title')</title>
	</head>


	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed page-loading">
		<div class="page-loader page-loader-logo">
			{{-- <img alt="Logo" class="max-h-75px" src="assets/media/logos/logo-apple.png" /> --}}
			<div class="spinner spinner-primary"></div>
		</div>
		@include('includes.mobileMenu')
		@include('sweetalert::alert')

		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					{{-- Footer --}}
                    @include('includes.header')

                    {{-- Page Content --}}
                    @yield('content')
                        
                    {{-- Footer --}}
                    @include('includes.footer')
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>

         

		@include('includes.stickyTop')

		@stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')

	</body>
</html>