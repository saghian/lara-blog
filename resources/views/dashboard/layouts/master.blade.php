<!DOCTYPE html>
<html lang="fa" class="light-style layout-navbar-fixed layout-menu-fixed" dir="rtl" data-theme="theme-default"
    data-assets-path="/dashboard/" data-template="vertical-menu-template-starter">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>@yield('title')</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/dashboard/img/favicon/favicon.ico') }}">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('/dashboard/vendor/fonts/boxicons.css') }}">

    <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" /> -->
    <!-- <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" /> -->

    <!-- Core CSS -->
    <link rel="stylesheet" href="/dashboard/vendor/css/rtl/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="/dashboard/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css">

    {{-- <link rel="stylesheet" href="{{ asset('/dashboard/vendor/css/rtl/core.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('/dashboard/vendor/css/rtl/theme-default.css') }}" "> --}}
    <link rel="stylesheet" href="{{ asset('/dashboard/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('/dashboard/vendor/css/rtl/rtl.css') }}">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">

    @yield('style')
    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('/dashboard/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('/dashboard/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/dashboard/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('dashboard.sections.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('dashboard.sections.navbar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('dashboard.layouts.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('/dashboard/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/dashboard/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('/dashboard/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('/dashboard/vendor/libs/hammer/hammer.js') }}"></script>

    <script src="{{ asset('/dashboard/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('/dashboard/js/main.js') }}"></script>
    <script>
        @yield('script')
    </script>


    <!-- Page JS -->
</body>

</html>
