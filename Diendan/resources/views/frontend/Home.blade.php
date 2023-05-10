@extends("frontend.Layout")
@section("do-du-lieu-vao-layout")
                            <div class="fittel px-4">
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Lọc
                                </button>
                                    <ul class="dropdown-menu" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);">
                                        <li><a class="dropdown-item" href="{{ url('frontend/new')}}">Mới Nhất</a></li>
                                        <li><a class="dropdown-item" href="{{ url('frontend/old')}}">Cũ Nhất</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Hot Nhất</a></li>
                                    </ul>
                            </div>
                                <div class="list_question">
                                @foreach($data as $row)
                                    <div class="question_item">
                                        <div class="question_item-wrapper px-4">
                                            <div class="item_qus">
                                                <a class="user-img-icon" href="" title="">
                                                    <img src="{{asset('upload/user/'.$row->user->avatar)}}" alt="" class="w-px-40 h-px-40 rounded-circle">
                                                </a>
                                                <ul class="DiscussionListItem-badges badges"></ul>
                                                <a href="{{ url('frontend/question/'.$row->id) }}" class="DiscussionListItem-main">
                                                    <h2 class="DiscussionListItem-title text-uppercase mb-1">{{ $row->title }}</h2>
                                                    <h6 class="mb-0">{{ $row->description }}</h6>
                                                    <ul class="mb-0">
                                                        <li class="">
                                                            <span class="inf-ques">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M11 15h2V9h3l-4-5-4 5h3z"></path><path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path></svg>
                                                                <span class="username"><strong>{{ $row->user->username}}</strong></span>
                                                                <time>{{ $row->date_updated }}</time>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </a>
                                                
                                                <span class="number-rep">
                                                    <svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 5.589 2 10c0 2.908 1.898 5.515 5 6.934V22l5.34-4.005C17.697 17.852 22 14.32 22 10c0-4.411-4.486-8-10-8zm0 14h-.333L9 18v-2.417l-.641-.247C5.67 14.301 4 12.256 4 10c0-3.309 3.589-6 8-6s8 2.691 8 6-3.589 6-8 6z"></path><path d="M13 6h-2v3H8v2h3v3h2v-3h3V9h-3z"></path></svg>
                                                    2.3K
                                                </span>
                                                
                                                <div class="ButtonGroup Dropdown dropdown DiscussionListItem-controls itemCount1">
                                                <div class="dropdown" style="text-align: center;">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="http://localhost/Chuvanlong_DATN/Diendan/public/backend/users/update/17"><i class="bx bx-edit-alt me-1"></i> Theo dõi</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                {{ $data->links('admin.pagination-cus') }}
                                
@endsection