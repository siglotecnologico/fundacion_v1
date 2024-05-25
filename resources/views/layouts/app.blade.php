<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Fundacción Dios es Bueno') }}</title>
       {{--  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" /> --}}
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon.ico" />
        <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
        <meta name="description" content="Gifall HTML 5 Template " />

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/nice-select.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/thm-icons/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/slick-slider/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/language-switcher/polyglot-language-switcher.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }}">

        <!-- template styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/gifall.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/gifall-responsive.css') }}" />
        <!-- Scripts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        -->
        <!-- Styles -->
    </head>
    <body class="font-sans antialiased">

        <!-- Start Preloader -->
        @include('layouts/preloader')
        <!-- End Preloader -->

        <div class="page-wrapper">
            <!--Start Main Header One-->
            <header class="main-header main-header-one">
                <!--Start Main Header One Top-->
                    @include('layouts/main-header-top')
                <!--End Main Header One Top-->
                <!--Start Main Header One Bottom-->
                    @include('layouts/main-header-bottom')
                <!--End Main Header One Bottom-->
            </header>


            <div class="stricky-header stricky-header--one stricked-menu main-menu">
                <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
            </div><!-- /.stricky-header -->
            <!--End Main Header One-->

            @yield('content')

            <!--Start Footer One -->
            @include('layouts/footer')
            <!--End Footer One-->
        </div>

        @include('layouts/mobile')

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
            <i class="icon-down-arrow"></i>
        </a>
        <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/circleType/jquery.circleType.js')}}"></script>
        <script src="{{ asset('assets/vendors/circleType/jquery.lettering.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/isotope/isotope.js')}}"></script>
        <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/jquery-migrate/jquery-migrate.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
        <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/odometer/odometer.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/parallax/parallax.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/swiper/swiper.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/timepicker/timePicker.js')}}"></script>
        <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/typed-2.0.11/typed-2.0.11.js')}}"></script>
        <script src="{{ asset('assets/vendors/vegas/vegas.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/wow/wow.js')}}"></script>
        <script src="{{ asset('assets/vendors/language-switcher/jquery.polyglot.language.switcher.js')}}"></script>
        <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/slick-slider/slick.js')}}"></script>
        <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/progress-bar/knob.js')}}"></script>

        <!-- Template js -->
        <script src="{{ asset('assets/js/custom.js')}}"></script>
    </body>
</html>
