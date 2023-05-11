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
        <div class="question_wrapper mt-5 min-vh-100">
                    <div class="container">
                        <div class="question-content">
                            <div class="question-left">
                                <div class="nav_left">
                                    <a href="{{ url('frontend/posts/create')}}">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Tạo bài thảo luận</button>
                                    </a>
                                    <ul class="nav-list">
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(51, 51, 255, 0.4);transform: ;msFilter:;"><path d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zM8.999 17H7v-1.999l5.53-5.522 1.999 1.999L8.999 17zm6.473-6.465-1.999-1.999 1.524-1.523 1.999 1.999-1.524 1.523z"></path></svg>
                                            <a href="{{ url('frontend/home')}}">Tất cả câu hỏi</a>
                                        </li>
                                        @if (Auth::check())
                                        <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M4.5 8.552c0 1.995 1.505 3.5 3.5 3.5s3.5-1.505 3.5-3.5-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5zM19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2z"></path></svg>
                                            <a href="{{ url('frontend/follower')}}">Đang theo dõi</a>
                                        </li>
                                        @endif
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(102, 205, 102, 1);transform: ;msFilter:;"><path d="m21.868 11.504-4-7A1 1 0 0 0 17 4H3a1 1 0 0 0-.868 1.496L5.849 12l-3.717 6.504A1 1 0 0 0 3 20h14a1 1 0 0 0 .868-.504l4-7a.998.998 0 0 0 0-.992z"></path></svg>
                                            <a href="{{ url('frontend/alltag')}}">Thẻ</a>
                                        </li>
                                        @foreach($datacate as $record)
                                        <li>
                                        <a href="{{ url('frontend/tag/'.$record->id) }}">
                                        <span class=" demo w-px-20 h-px-20">
                                            <img class="w-px-20 h-px-20" src="{{ asset('template/images/tag-icon.png') }}">
                                        </span>
                                            <span>{{ $record->name }}<span>
                                        </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="list-question-right mt-3">
                                @yield("do-du-lieu-vao-layout")
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include("frontend.Footer")
    </div>
    <script src="{{ asset('template/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('template/libs/bootstrap/popper.min.js')}}"></script>
    <!-- <script src="{{ asset('template/libs/bootstrap/bootstrap.min.js')}}"></script> -->
    <script src="{{ asset('template/libs/tinymce_6.4.2/tinymce.min.js')}}" referrerpolicy="origin"></script>
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
    <script>
        tinymce.init({
            selector: '#content'
        });
    </script>
</body>

</html>