@extends("frontend.Layout")
@section("do-du-lieu-vao-layout")
<div class="question_wrapper">
                    <div class="container">
                        <div class="question-content">
                            <div class="question-left">
                                <div class="nav_left">
                                    <a href="{{ url('frontend/posts/create')}}" class="view_all_question">
                                        Bắt đầu đặt câu hỏi
                                    </a>
                                    <ul class="nav-list">
                                        <li>
                                            <i aria-hidden="true" class="icon far fa-comments Button-icon"></i>
                                            <a href="{{ url('frontend/home')}}">Tất cả câu hỏi</a>
                                        </li>
                                        <li>
                                            <i aria-hidden="true" class="icon fas fa-star Button-icon"></i>
                                            <a href="{{ url('frontend/follower')}}">Đang theo dõi</a>
                                        </li>
                                        <li>
                                            <i aria-hidden="true" class="icon fas fa-th-large Button-icon"></i>
                                            <a href="javascrip:;">Thẻ</a>
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
                            <div class="list-question-right">
                                <div class="fittel">
                                    <button class="btn-fitter">
                                        Lọc
                                        <i aria-hidden="true" class="icon fas fa-caret-down Button-caret"></i>
                                    </button>
                                    <ul class="drop-down-fittel">
                                        <li>
                                            <a href="{{ url('frontend/new')}}">Mới Nhất</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('frontend/old')}}">Cũ Nhất</a>
                                        </li>
                                        <li>
                                            <a href="">Hot Nhất</a>
                                        </li>
                                    </ul>
                                </div>
                                @foreach($data as $row)
                                <div class="list_question">
                                    <div class="question_item">
                                        <div class="question_item-wrapper">
                                            <div class="item_qus">
                                                <a class="user-img-icon" href="" title="{{ url('frontend/tag/'.$record->id) }}">
                                                    <span>E</span>
                                                </a>
                                                <ul class="DiscussionListItem-badges badges"></ul>
                                                <a href="{{ url('frontend/question/'.$row->id) }}" class="DiscussionListItem-main">
                                                    <h2 class="DiscussionListItem-title">{{ $row->title }}</h2>
                                                    <ul class="">
                                                        <li class="">
                                                            <span class="inf-ques">
                                                                <i aria-hidden="true" class="icon fas fa-reply "></i>
                                                                <span class="username">{{ $row->user_id }}</span>
                                                                started
                                                                <time>{{ $row->date_updated }}</time>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </a>
                                                <span class="number-rep">2.3K</span>
                                                <div class="ButtonGroup Dropdown dropdown DiscussionListItem-controls itemCount1">
                                                    <button class="drop-flow">
                                                        <i aria-hidden="true" class="icon fas fa-ellipsis-v Button-icon"></i>
                                                        <span class="Button-label"></span>
                                                    </button>
                                                    <ul class="Dropdown-menu-flow dropdown-menu">
                                                        <li class="item-subscription">
                                                            <button class="hasIcon" type="button">
                                                                <i aria-hidden="true" class="icon fas fa-star Button-icon"></i>
                                                                <span class="Button-label">Follow</span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection