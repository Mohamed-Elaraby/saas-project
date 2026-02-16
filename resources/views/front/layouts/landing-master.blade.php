<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed" data-theme-mode="dark" data-card-style="style1" data-card-background="background1">

    <head>

        <!-- Meta Data -->
		<meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="google-site-verification" content="PrDfqv2D4hZEcPcWXm1j9M4GPM8JQrojL4nDgUjjYoE" />
        <!-- TITLE -->
		<title>@yield('title')</title>

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/front/favicon_io/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/front/favicon_io/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/front/favicon_io/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('storage/front/favicon_io/site.webmanifest') }}">

        <!-- BOOTSTRAP CSS -->
	    <link  id="style" href="{{asset('build/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/icon-fonts/icons.css')}}" rel="stylesheet">

        <!-- APP SCSS -->
        @vite(['resources/sass/app.scss'])


        @include('front.layouts.components.landing.styles')


        @yield('styles')

	</head>

    <body class="landing-body">

        <!-- SWITCHER -->

        @include('front.layouts.components.landing.switcher')

        <!-- END SWITCHER -->

        <!-- PAGE -->
		<div class="landing-page-wrapper">

            <!-- HEADER -->

            @include('front.layouts.components.landing.header')

            <!-- END HEADER -->

            <!-- SIDEBAR -->

            @include('front.layouts.components.landing.sidebar')

            <!-- END SIDEBAR -->

            <!-- MAIN-CONTENT -->

            <div class="main-content landing-main px-0">

                @yield('content')

                <!-- FOOTER -->
                @include('front.layouts.components.landing.footer')

                <!-- FOOTER -->

            </div>
            <!-- END MAIN-CONTENT -->

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->

        @include('front.layouts.components.landing.scripts')

        @yield('scripts')

        <!-- STICKY JS -->
        <script src="{{asset('build/assets/sticky.js')}}"></script>

        <!-- END SCRIPTS -->

	</body>
</html>
