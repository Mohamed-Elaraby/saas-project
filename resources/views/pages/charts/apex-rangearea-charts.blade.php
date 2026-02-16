@extends('layouts.master')

@section('styles')


@endsection

@section('content')

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="top-left"></div>
                                <div class="top-right"></div>
                                <div class="bottom-left"></div>
                                <div class="bottom-right"></div>
                                <div class="card-header">
                                    <div class="card-title">
                                        Basic Range Area Chart
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="rangearea-basic"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="top-left"></div>
                                <div class="top-right"></div>
                                <div class="bottom-left"></div>
                                <div class="bottom-right"></div>
                                <div class="card-header">
                                    <div class="card-title">
                                        Combo Range Area Chart
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="rangearea-combo"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                </div>
            </div>
            <!-- End::app-content -->

@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Internal Apex Range Area Charts JS -->
        @vite('resources/assets/js/apexcharts-rangearea.js')
        

@endsection