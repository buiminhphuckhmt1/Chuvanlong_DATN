<header class="header fixed-top">
            <nav class="navbar navbar-nav">
                <div class="top_nav">
                    <div id="header-secondary" class="Header-secondary">
                    <ul class="Header-controls">
                        @if (Auth::check())
                        <li class="nav-items navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                    <div class="avatar avatar-online">
                      <img src="{{asset('upload/user/'.$user->avatar)}}" alt="" class="w-px-40 h-px-40 rounded-circle">
                    </div>
                  </a>
                  <ul  class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="http://localhost/Chuvanlong_DATN/Diendan/public/upload/user/logo.png" alt="" class="w-px-40 h-px-40 rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{$user->firstname}} {{$user->middlename}} {{$user->lastname}}</span>
                            @if ($user->type == 1)
                            <small class="text-muted">Quản trị</small>
                            @elseif ($user->type  == 2)
                            <small class="text-muted">Người dùng</small>
                            @endif
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{url('frontend/personal/'.$user->id)}}">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Thông tin tài khoản</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{url('frontend/logout')}}">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Đăng xuất</span>
                      </a>
                    </li>
                  </ul>
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
                        <a href="{{ url('frontend/homes')}}" class="nav_logo">
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
                            @if (Auth::check())<li class="list_item" ><a href="{{ url('frontend/follower')}}" class="product_link">Bài viết đang theo dõi</a></li>@endif
                            <li class="list_item" ><a href="{{ url('frontend/topview')}}" class="product_link">Bài viết xem nhiều nhất</a></li>
                        </ul>
                    </div>
                    <div class="nav">
                        <ul class="nav_item">
                            <li class="list_item" v-for="item in menuList">
                                <a href="{{ url('frontend/homes')}}" class="nav_link"> Trang chủ</a>
                                <ul class="product_drop">
                                    <li class="list_item" v-for="item in productList"><a href="javascrip:;" class="product_link"></a></li>
                                </ul>
                            </li>
                            <li class="list_item" v-for="item in menuList">
                                <a href="javascrip:;" class="nav_link">Bài thảo luận</a>
                                <ul class="product_drop">
                                    <li class="list_item" v-for="item in productList"><a href="javascrip:;" class="product_link"></a></li>
                                </ul>
                            </li>
                            <li class="list_item" v-for="item in menuList">
                                <a href="{{url('frontend/posts/create')}}" class="nav_link"> Tạo bài thảo luận</a>
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
                    <form method="post" action="{{ url('frontend/search') }}" id="search_form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="search_wrapper">
                            <div class="title">
                                Bạn đang cần tìm kiếm thông tin?
                            </div>
                            <div class="input_box">
                                <input class="input-search" type="text" name="key_search" id="" placeholder="Nhập từ khóa tìm kiếm...">
                                <button type="submit" value="submit" form="search_form" class="btn-search">
                                    <img src="{{ asset('template/images/search.svg')}}" alt="">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </header>