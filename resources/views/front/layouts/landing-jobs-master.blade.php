<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed" data-theme-mode="dark" data-card-style="style1" data-card-background="background1">

    <head>

        <!-- Meta Data -->
		<meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="SciFi - Laravel Premium Bootstrap 5 Admin Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin panel, dashboard, admin panel template, laravel admin panel, admin template, laravel admin, dashboard admin, bootstrap laravel, admin, dashboard template bootstrap, admin dashboard design, laravel template, admin panel for laravel, laravel, admin template bootstrap 5, dashboard admin panel">

        <!-- TITLE -->
		<title> Velvet - Laravel Premium Bootstrap 5 Admin &amp; Dashboard Template </title>

        <!-- FAVICON -->
        <link rel="icon" href="{{asset('build/assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">

        <!-- BOOTSTRAP CSS -->
	    <link  id="style" href="{{asset('build/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/icon-fonts/icons.css')}}" rel="stylesheet">

        <!-- APP SCSS -->
        @vite(['resources/sass/app.scss'])


        @include('front.layouts.components.landing.styles')


        @yield('styles')

	</head>

    <body class="landing-body jobs-landing">

        <!-- SWITCHER -->

        @include('front.layouts.components.landing.switcher')

        <!-- END SWITCHER -->

        <!-- PAGE -->
		<div class="landing-page-wrapper">

            <!-- HEADER -->

            @include('front.layouts.components.landing.jobs-header')

            <!-- END HEADER -->

            <!-- SIDEBAR -->

            @include('front.layouts.components.landing.jobs-sidebar')

            <!-- END SIDEBAR -->

            <!-- MAIN-CONTENT -->

            <div class="main-content p-0 landing-main">

                @yield('content')

                <!-- FOOTER -->
                @include('front.layouts.components.landing.jobs-footer')

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
