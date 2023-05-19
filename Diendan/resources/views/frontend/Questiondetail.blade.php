@extends("frontend.Layout1")
@section("do-du-lieu-vao-layout1")
<?php
        $user = Auth::user()
    ?>
<div class="question_wrapper mt-7 min-vh-100">
        <div class="page-title d-sm-block p-3">
          <div class="container">
            <div class="title">
              <h2>{{$post->title}}</h2>
              <span class="badge bg-label-primary mb-3">{{ $post->category->name}} </span>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="question-detail-wrapper">
            <div class="ques-d-left">
              <div class="list-post">
                <div class="item-post" v-for="n in 10">
                  <a class="user-img-icon" href="/u/elise_boyer" title="">
                    <div class="avatar avatar-online">
                        <img src="{{asset('upload/user/'.$post->user->avatar)}}" alt="" class="w-px-40 h-px-40 rounded-circle">
                    </div>
                  </a>
                  <div class="item-post-content w-100">
                    <div class="inf-user-post">
                      <span class="use"> {{$post->user->firstname}} {{$post->user->middlename}} {{$post->user->lastname}}</span>
                      <span>{{$post->date_updated}}</span>
                    </div>
                    <div class="content">
                    <span>{{$post->description}}</span>
                    {!! @$post->content !!}
                    </div>
                    <div class="repdy-like">
                    </div>
                  </div>
                </div>
              </div>
              @foreach($comments as $comment)
              <div class="list-post">
                <div class="item-post" v-for="n in 10">
                  <a class="user-img-icon" href="/u/elise_boyer" title="">
                    <div class="avatar avatar-online">
                        <img src="{{asset('upload/user/'.$comment->user->avatar)}}" alt="" class="w-px-40 h-px-40 rounded-circle">
                    </div>
                  </a>
                  <div class="item-post-content w-100">
                    <div class="inf-user-post w-100">
                      <span class="use">{{$comment->user->firstname}} {{$comment->user->middlename}} {{$comment->user->lastname}}</span>
                      <span>{{ $comment->date_created }}</span>
                      @if (Auth::check())
                      @if($user->id == $comment->user_id )
                      {{$comment->id}}
                      <a href="{{ url('frontend/deletecmt/'.$comment->id) }}" class=" float-end  rounded-0" form="manage-user"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg></a>
                      @endif
                      @endif
                      </div>
                    <div class="content">
                    {!! @$comment->comment !!}
                    </div>
                    <div class="repdy-like">
                    </div>
                  </div>
                </div>
              </div>
          @endforeach
              <div id="comment-box" class="p-4">
                      <form method="post" action="{{ url('frontend/comment', $post->id) }}" id="comt_form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row g-2">
                              <div class="col mb-0">
                                <label class="mb-2" for="content"> Câu trả lời của bạn</label>
                                <textarea class="form-control mt-2" id="comment" name="comment" placeholder="Nhập nội dung" style="bod"></textarea>
                                <!-- <script type="text/javascript">
                                  CKEDITOR.replace("comment");
                                </script> -->
                              </div>
                            </div>
                          <div class="modal-footer">
                          </div>
                        </form>
                        @if (Auth::check())
                          <button type="submit" form="comt_form" value="Submit" class="btn btn-primary">Gửi câu trả lời</button>
                          @else
                          <a href="{{url('frontend/login')}}"><button type="botton" class="btn btn-primary">Gửi câu trả lời</button></a>
                          @endif
              </div>
            </div>
            <div class="ques-d-right" >
              <div style="position: relative;">
                <nav class="DiscussionPage-nav" style="position: fixed; top:200px;">
                  <a href="#comment-box"><button id="scrollToDown" type="botton" class="btn btn-danger">Trả lời</button></a>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection