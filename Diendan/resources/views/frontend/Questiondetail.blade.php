@extends("frontend.Layout")
@section("do-du-lieu-vao-layout")
<div class="question_wrapper">
        <div class="page-title d-sm-block">
          <div class="container">
            <div class="title">
              <h2>{{$post->title}}</h2>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="question-detail-wrapper">
            <div class="ques-d-left">
              <div class="list-post">
                <div class="item-post" v-for="n in 10">
                  <a class="user-img-icon" href="/u/elise_boyer" title="">
                    <span>E</span>
                  </a>
                  <div class="item-post-content">
                    <div class="inf-user-post">
                      <span class="use"> abcdef</span>
                      <span>{{$post->date_updated}}</span>
                    </div>
                    <div class="content">
                    {{$post->content}}
                    </div>
                    <div class="repdy-like">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ques-d-right">
              <div style="position: relative;">
                <nav class="DiscussionPage-nav">
                  <ul>
                    <li class="item-controls">
                      <div class="">
                        <button class="view_all_question" type="button">Trả lời câu hỏi</button>
                        <ul class="Dropdown-menu dropdown-menu Dropdown-menu--right">
                          <li class="item-reply"><button class="hasIcon" type="button"><i aria-hidden="true"
                                class="icon fas fa-reply Button-icon"></i><span class="Button-label">Reply</span></button>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      @foreach($post->comments as $comment)
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="media-heading user_name">{{ $comment->user->name }} <small>{{ \Carbon\Carbon::parse($comment->created_at)->format('d-m-Y')  }}</small></h4>
                                                <p>{{ $comment->content }}</p>
                                            </div>
                                        </div>
                                    @endforeach
@endsection