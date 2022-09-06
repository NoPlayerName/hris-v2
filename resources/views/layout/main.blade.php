<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>
    <meta charset="utf-8" />
    <title>{{ $title ? $title . ' | HRIS Trans7' : 'HRIS Trans7' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Human Resource Information System" name="description" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('assets/images/logo-tm.png') }}">

    <!-- jsvectormap css -->
    <link href="{{ url('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ url('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ url('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('assets/css/app.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ url('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('components.topbar')
        <!-- ========== App Menu ========== -->
        @include('components.sidebar')
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">{{ $title }}</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">SKI & PA</a></li>
                                        <li class="breadcrumb-item active">Sasaran Kerja Individu</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col">

                            <div class="h-100">

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->

                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © IT Department.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                PT. Duta Visual Nusantara Tivi Tujuh
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!-- <div class="customizer-setting d-none d-md-block">
        <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div> -->

    <!-- JAVASCRIPT -->
    <script src="{{ url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ url('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ url('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ url('assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ url('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ url('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ url('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ url('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ url('assets/js/app.js') }}"></script>
</body>

</html>
