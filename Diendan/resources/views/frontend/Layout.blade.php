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
    <link rel="shortcut icon"  type="image/x-icon" href="{{ asset('template/images/img-logo-header.png')}}">
    <link rel="stylesheet" href="{{ asset('template/libs/swiper/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout2/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script type="text/javascript" src="{{ asset('admin/assets/ckeditor/ckeditor.js') }}"></script>
</head>
<body class="home">
    <div id="app">
    <?php
        $user = Auth::user()
    ?>
        <header class="header">
            <nav class="navbar">
                <div class="top_nav">
                    <div id="header-secondary" class="Header-secondary">
                    <ul class="Header-controls">
                        @if (Auth::check())
                            <li class="item-session">
                            <div class="ButtonGroup Dropdown ">
                                <button class="Dropdown-toggle Button Button--user Button--flat">
                                    <span class="Avatar " loading="lazy">
                                    <img src="{{asset('upload/user/'.$user->avatar)}}" alt class="w-px-40 h-auto rounded-circle" />
                                    </span> 
                                    
                                        <span class="username">{{$user->firstname}} {{$user->middlename}} {{$user->lastname}}</span>
                                    
                                </button>
                                <ul class="Dropdown-menu">
                                    <li class="item-profile">
                                        <a class="hasIcon" href="/u/47" active="false">
                                            <i class="icon fas fa-user Button-icon"></i>
                                            <span class="Button-label" style="text-transform: capitalize;">Thông tin cá nhân</span>
                                        </a>
                                    </li>
                                    <li class="item-logOut">
                                        <a href="{{url('frontend/logout')}}" class="hasIcon" type="button">
                                            <i  class="icon fas fa-sign-out-alt Button-icon"></i>
                                            <span class="Button-label" style="text-transform: capitalize;">Đăng xuất</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @else
                        <li class="item-session">
                            <span><a href="{{url('frontend/login')}}" style="color:#ffffff;">Đăng nhập</a></span>
                        </li>
                        <li class="item-session">
                            <span><a href="{{url('frontend/register')}}" style=" margin-left:30px; color:#ffffff;">Đăng ký</a></span>
                        </li>
                        @endif
                    </ul>
                    </div>
                    <div class="logo">
                        <a href="index.html" class="nav_logo">
                            <img src="{{ asset('template/images/logo.svg')}}" alt="">
                        </a>
                    </div>
                    <div class="icon">
                        <button class="nav_toggle">
                            <span class="icon_bar bar_1"></span>
                            <span class="icon_bar bar_2"></span>
                        </button>
                    </div>
                </div>
            </nav>
            <div id="menudrop" class="nav_menu_drop">
                <div class="main_nav_drop">
                    <div class="product">
                        <div class="title">
                            <a href="javascrip:;">Bài thảo luận</a>
                        </div>
                        <ul class="product_item">
                            <li class="list_item" ><a href="{{ url('frontend/new')}}" class="product_link">Bài viết mới nhất </a></li>
                            <li class="list_item" ><a href="{{ url('frontend/follower')}}" class="product_link">Bài viết đang theo dõi</a></li>
                        </ul>
                    </div>
                    <div class="nav">
                        <ul class="nav_item">
                            <li class="list_item" v-for="item in menuList">
                                <a href="{{ url('frontend/home')}}" class="nav_link"> Trang chủ</a>
                                <ul class="product_drop">
                                    <li class="list_item" v-for="item in productList"><a href="javascrip:;" class="product_link"></a></li>
                                </ul>
                            </li>
                            <li class="list_item" v-for="item in menuList">
                                <a href="item.link" class="nav_link"> Thêm bài viết</a>
                                <ul class="product_drop">
                                    <li class="list_item" v-for="item in productList"><a href="javascrip:;" class="product_link"></a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="search">
                            <a href="javascrip:;">
                                <img src="{{ asset('template/images/search.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="search_drop">
                    <form action="">
                        <div class="search_wrapper">
                            <div class="title">
                                Bạn đang cần tìm kiếm thông tin?
                            </div>
                            <div class="input_box">
                                <input class="input-search" type="text" name="" id="" placeholder="Nhập từ khóa tìm kiếm...">
                                <button class="btn-search">
                                    <img src="images/search.svg" alt="">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </header>
        <main>
            @yield("do-du-lieu-vao-layout")
        </main>
        <footer class="footer">
            <div class="container">
                <div class="footer-logo">
                    <a href="javascript:;" title="">
                        <img src="{{ asset('template/images/img-logo-header.png')}}" alt="" />
                    </a>
                </div>

                <div class="footer-sub">
                    <div class="contact">
                    <marquee direction="" onmouseover="this.stop();" onmouseout="this.start();">
                        <div class="holder">
                            <div class="text">
                                Có thắc mắc và khó khăn vui lòng liên hệ đến đội ngũ support qua 
                                <span class="icon">
                                    <svg
                                        width="18"
                                        height="18"
                                        viewBox="0 0 18 18"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M3.62 7.79C5.06 10.62 7.38 12.93 10.21 14.38L12.41 12.18C12.68 11.91 13.08 11.82 13.43 11.94C14.55 12.31 15.76 12.51 17 12.51C17.55 12.51 18 12.96 18 13.51V17C18 17.55 17.55 18 17 18C7.61 18 0 10.39 0 1C0 0.45 0.45 0 1 0H4.5C5.05 0 5.5 0.45 5.5 1C5.5 2.25 5.7 3.45 6.07 4.57C6.18 4.92 6.1 5.31 5.82 5.59L3.62 7.79Z"
                                            fill="#1D5A99"
                                        />
                                    </svg>
                                </span>
                                (+84) 24 6259 4879 hoặc
                                <span class="icon">
                                    <svg
                                        width="20"
                                        height="16"
                                        viewBox="0 0 20 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M18 0H2C0.9 0 0.00999999 0.9 0.00999999 2L0 14C0 15.1 0.9 16 2 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0ZM18 4L10 9L2 4V2L10 7L18 2V4Z"
                                            fill="#1D5A99"
                                        />
                                    </svg>
                                </span>
                                info@truongthanhdaiviet.com.vn
                            </div>
                            <div class="text">
                                Có thắc mắc và khó khăn vui lòng liên hệ đến đội ngũ support qua 
                                <span class="icon">
                                    <svg
                                        width="18"
                                        height="18"
                                        viewBox="0 0 18 18"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M3.62 7.79C5.06 10.62 7.38 12.93 10.21 14.38L12.41 12.18C12.68 11.91 13.08 11.82 13.43 11.94C14.55 12.31 15.76 12.51 17 12.51C17.55 12.51 18 12.96 18 13.51V17C18 17.55 17.55 18 17 18C7.61 18 0 10.39 0 1C0 0.45 0.45 0 1 0H4.5C5.05 0 5.5 0.45 5.5 1C5.5 2.25 5.7 3.45 6.07 4.57C6.18 4.92 6.1 5.31 5.82 5.59L3.62 7.79Z"
                                            fill="#1D5A99"
                                        />
                                    </svg>
                                </span>
                                (+84) 24 6259 4879 hoặc
                                <span class="icon">
                                    <svg
                                        width="20"
                                        height="16"
                                        viewBox="0 0 20 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M18 0H2C0.9 0 0.00999999 0.9 0.00999999 2L0 14C0 15.1 0.9 16 2 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0ZM18 4L10 9L2 4V2L10 7L18 2V4Z"
                                            fill="#1D5A99"
                                        />
                                    </svg>
                                </span>
                                info@truongthanhdaiviet.com.vn
                            </div>
                            <div class="text">
                                Có thắc mắc và khó khăn vui lòng liên hệ đến đội ngũ support qua 
                                <span class="icon">
                                    <svg
                                        width="18"
                                        height="18"
                                        viewBox="0 0 18 18"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M3.62 7.79C5.06 10.62 7.38 12.93 10.21 14.38L12.41 12.18C12.68 11.91 13.08 11.82 13.43 11.94C14.55 12.31 15.76 12.51 17 12.51C17.55 12.51 18 12.96 18 13.51V17C18 17.55 17.55 18 17 18C7.61 18 0 10.39 0 1C0 0.45 0.45 0 1 0H4.5C5.05 0 5.5 0.45 5.5 1C5.5 2.25 5.7 3.45 6.07 4.57C6.18 4.92 6.1 5.31 5.82 5.59L3.62 7.79Z"
                                            fill="#1D5A99"
                                        />
                                    </svg>
                                </span>
                                (+84) 24 6259 4879 hoặc
                                <span class="icon">
                                    <svg
                                        width="20"
                                        height="16"
                                        viewBox="0 0 20 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M18 0H2C0.9 0 0.00999999 0.9 0.00999999 2L0 14C0 15.1 0.9 16 2 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0ZM18 4L10 9L2 4V2L10 7L18 2V4Z"
                                            fill="#1D5A99"
                                        />
                                    </svg>
                                </span>
                                info@truongthanhdaiviet.com.vn
                            </div>
                        </div>
                    </marquee>
                    </div>
                    <ul class="social">
                        <li>
                            <a href="javascript:;" title="">
                                <img src="{{ asset('template/images/ic-ft-social-1.svg')}}" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="">
                                <img src="{{ asset('template/images/ic-ft-social-2.svg')}}" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="">
                                <img src="{{ asset('template/images/ic-ft-social-3.svg')}}" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="">
                                <img src="{{ asset('template/images/ic-ft-social-4.svg')}}" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="">
                                <img src="{{ asset('template/images/ic-ft-social-5.svg')}}" alt="" />
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- <div class="footer-infolist">
                    <div class="row">
                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="title-cate">
                                <h3>Khám phá chúng tôi</h3>
                            </div>

                            <ul class="list-info">
                                <li>
                                    <a href="javascript:;" title=""> Trang chủ </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title=""> Giới thiệu </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title=""> Hỏi đáp </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title=""> Blog </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title=""> Liên hệ </a>
                                </li> 
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-md-0">
                            <div class="title-cate">
                                <h3>Danh mục</h3>
                            </div>

                            <ul class="list-info">
                                <li>
                                    <a href="javascript:;" title="">
                                        <span> Câu hỏi mới nhất </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="">
                                        <span> Câu hỏi nhiều tương tác nhất </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="">
                                        <span> Top đóng góp </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="">
                                        <span> Danh sách người dùng </span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="title-cate">
                                <h3>Chủ đề trao đổi</h3>
                            </div>

                            <ul class="list-info">
                                <li>
                                    <a href="javascript:;" title="">
                                        <span> Html/css </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="">
                                        <span> javascript </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="">
                                        <span> Reactjs </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="">
                                        Vuejs...
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->

                <div class="footer-copyright">
                    <p>© 2022 Bản quyền thuộc về Chu Van Long</p>
                </div>
            </div>

            <div class="social-fixed">
                <a href="javascript:;" title="" id="scrollToTop">
                    <img src="images/scroll-to-top.svg" alt="" />
                </a>
            </div>
        </footer>
    </div>
    <script src="{{ asset('template/js/vue.js')}}"></script>
    <script src="{{ asset('template/js/httpvueloader.js')}}"></script>
    <script src="{{ asset('template/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('template/libs/bootstrap/popper.min.js')}}"></script>
    <script src="{{ asset('template/libs/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('template/libs/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('template/js/main.js')}}"></script>
</body>

</html>