<!DOCTYPE html>
<html/
lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/frontend/layout2/assets"
  data-template="vertical-menu-template-free">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQFORUM</title>
    <link rel="shortcut icon"  type="image/x-icon" href="{{ asset('template/images/favicon_forum.jpg')}}">
    <link rel="stylesheet" href="{{ asset('template/libs/swiper/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout2/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout2/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout2/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout2/assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout2/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout2/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <script src="{{ asset('admin/assets/admin/layout2/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('admin/assets/admin/layout2/assets/js/config.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/ckeditor/ckeditor.js') }}"></script>
</head>
<body class="home">
    <div id="app">
    <?php
        $user = Auth::user()
    ?>
        @include("frontend.Header")
        <main>
        @yield("do-du-lieu-vao-layout1")
        </main>
        @include("frontend.Footer")
    </div>
    <script src="{{ asset('template/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('template/libs/bootstrap/popper.min.js')}}"></script>
    <!-- <script src="{{ asset('template/libs/bootstrap/bootstrap.min.js')}}"></script> -->
    <script src="{{ asset('template/libs/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('template/js/main.js')}}"></script>
    <script src="{{ asset('admin/assets/admin/layout2/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/assets/admin/layout2/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('admin/assets/admin/layout2/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/assets/admin/layout2/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('admin/assets/admin/layout2/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('admin/assets/admin/layout2/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('admin/assets/admin/layout2/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('admin/assets/admin/layout2/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('admin/assets/admin/layout2/assets/js/dashboards-analytics.js') }}"></script>
    <script src="{{ asset('admin/assets/admin/layout2/assets/js/pages-account-settings-account.js') }}"></script>
</body>

</html>