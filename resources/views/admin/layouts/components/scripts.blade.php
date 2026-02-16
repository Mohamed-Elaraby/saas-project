
        <!-- SCROLL-TO-TOP -->
        <div class="scrollToTop">
                <span class="arrow"><i class="ti ti-arrow-narrow-up fs-20"></i></span>
        </div>
        <div id="responsive-overlay"></div>

        <!-- POPPER JS -->
        <script src="{{asset('build/assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{asset('build/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- NODE WAVES JS -->
        <script src="{{asset('build/assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- SIMPLEBAR JS -->
        <script src="{{asset('build/assets/libs/simplebar/simplebar.min.js')}}"></script>
        @vite('resources/assets/js/simplebar.js')


        <!-- COLOR PICKER JS -->
        <script src="{{asset('build/assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>

        <!-- Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
        <!-- Date & Time Picker JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        @vite('resources/assets/js/date&time_pickers.js')
        @routes <!-- for tightenco/ziggy package to use laravel routes in js file -->

{{--        <!-- Sweetalerts JS -->--}}
{{--        <script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>--}}
{{--        @vite('resources/assets/js/sweet-alerts.js')--}}
