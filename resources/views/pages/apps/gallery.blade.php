@extends('layouts.master')

@section('styles')

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-40.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-40.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-41.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-41.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-42.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-42.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-43.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-43.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-44.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-44.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-45.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-45.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-46.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-46.jpg')}}" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="{{asset('build/assets/images/media/media-60.jpg')}}" class="glightbox card" data-gallery="gallery1">
                                <img src="{{asset('build/assets/images/media/media-60.jpg')}}" alt="image" >
                            </a>
                        </div>
                    </div>
                    <!--End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Gallery JS -->
        <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>
        @vite('resources/assets/js/gallery.js')
        

@endsection