<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="detached" data-toggled="detached-close" data-theme-mode="dark" data-header-styles="dark" data-menu-styles="dark" data-card-style="style1" data-card-background="background1" >

    <head>

        <!-- Meta Data -->
		<meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="SciFi - Laravel Premium Bootstrap 5 Admin Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin panel, dashboard, admin panel template, laravel admin panel, admin template, laravel admin, dashboard admin, bootstrap laravel, admin, dashboard template bootstrap, admin dashboard design, laravel template, admin panel for laravel, laravel, admin template bootstrap 5, dashboard admin panel">

        <!-- TITLE -->
		<title> @yield('title') </title>

        <!-- FAVICON -->
        <link rel="icon" href="{{asset('build/assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">

        <!-- BOOTSTRAP CSS -->
	    <link  id="style" href="{{asset('build/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/icon-fonts/icons.css')}}" rel="stylesheet">

        <!-- APP SCSS -->
        @vite(['resources/sass/app.scss'])


        @include('admin.layouts.components.styles')


        <!-- MAIN JS -->
        <script src="{{asset('build/assets/main.js')}}"></script>

        @yield('styles')

	</head>

    <body>

        <!-- SWITCHER -->

        @include('admin.layouts.components.switcher')

        <!-- END SWITCHER -->

        <!-- LOADER -->
        <div id="loader">
            <img src="{{asset('build/assets/images/media/loader.svg')}}" alt="">
        </div>
        <!-- END LOADER -->

        <!-- PAGE -->
        <div class="page">

            <!-- HEADER -->

            @include('admin.layouts.components.header')

            <!-- END HEADER -->

            <!-- SIDEBAR -->

            @include('admin.layouts.components.sidebar')

            <!-- END SIDEBAR -->

            <!-- MAIN-CONTENT -->
            @yield('content')
            <!-- END MAIN-CONTENT -->

            <!-- SEARCH-MODAL -->

            @include('admin.layouts.components.search-modal')

            <!-- END SEARCH-MODAL -->

            <!-- Offcanvas -->

            @include('admin.layouts.components.offcanvas')

            <!-- END Offcanvas -->

            <!-- FOOTER -->

            @include('admin.layouts.components.footer')

            <!-- END FOOTER -->

        </div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->

        @include('admin.layouts.components.scripts')

        @yield('scripts')

        <!-- STICKY JS -->
        <script src="{{asset('build/assets/sticky.js')}}"></script>

        <!-- APP JS -->
        @vite('resources/js/app.js')


        <!-- CUSTOM-SWITCHER JS -->
        @vite('resources/assets/js/custom-switcher.js')


        <!-- sweet alert -->
        @include('sweetalert::alert')


        <!-- END SCRIPTS -->
        <script>
            $(document).ready(function() {
                var url = window.location.href;
                var firstSegment = url.split('/')[3]; // Assuming the first segment is at index 3

                if (firstSegment === 'ar') {
                    // Code to execute if the first segment is "ar"
                    $('#switcher-rtl').click();
                } else {
                    // Code to execute if the first segment is "en"
                    $('#switcher-ltr').click();
                }
            });
        </script>
    </body>
</html>
