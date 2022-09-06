<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark"
    data-sidebar-size="lg" data-sidebar-image="none">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'HRIS Trans7') }}</title>

    <meta content="Human Resource Information System" name="description" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('/assets/images/logo-tm.png') }}">

    <!-- jsvectormap css -->
    <link href="{{ url('/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ url('/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ url('/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ url('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('/assets/css/app.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ url('/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia

    <!-- JAVASCRIPT -->
    <script src="{{ url('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ url('/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ url('/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ url('/assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ url('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ url('/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ url('/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ url('/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
</body>

</html>
