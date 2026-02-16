<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="dark" data-header-styles="dark" data-menu-styles="dark" data-toggled="close">

    <head>

        <!-- Meta Data -->
		<meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="SciFi - Laravel Premium Bootstrap 5 Admin Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin panel, dashboard, admin panel template, laravel admin panel, admin template, laravel admin, dashboard admin, bootstrap laravel, admin, dashboard template bootstrap, admin dashboard design, laravel template, admin panel for laravel, laravel, admin template bootstrap 5, dashboard admin panel">
        
        <!-- TITLE -->
		<title> SciFi - Laravel Premium Bootstrap 5 Admin &amp; Dashboard Template </title>

        <!-- FAVICON -->
        <link rel="icon" href="{{asset('build/assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">

        <!-- BOOTSTRAP CSS -->
	    <link  id="style" href="{{asset('build/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/icon-fonts/icons.css')}}" rel="stylesheet">

        <!-- APP SCSS -->
        @vite(['resources/sass/app.scss'])


        <!-- MAIN JS -->
        <script src="{{asset('build/assets/authentication-main.js')}}"></script>

        @yield('styles')

	</head>

    <body>

        @yield('content')

        <!-- SCRIPTS -->

        <!-- BOOTSTRAP JS -->
        <script src="{{asset('build/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        @yield('scripts')

        <!-- END SCRIPTS -->

	</body>
</html>

