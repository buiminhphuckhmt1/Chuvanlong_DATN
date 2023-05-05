@extends("frontend.Layout")
@section("do-du-lieu-vao-layout")
<div class="question_wrapper">
        <div class="page-title d-sm-block">
          <div class="container">
            <div class="title">
              <h2>{{$record->title}}</h2>
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
                      <span>{{$record->date_updated}}</span>
                    </div>
                    <div class="content">
                    {{$record->content}}
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
                    <!-- <li class="item-scrubber">
                      <div class="PostStreamScrubber Dropdown App-titleControl">
                        <div class="Dropdown-menu dropdown-menu">
                          <div class="Scrubber"><a class="Scrubber-first"><i aria-hidden="true"
                                class="icon fas fa-angle-double-up "></i> Original Post</a>
                            <div class="Scrubber-scrollbar" style="max-height: 127.667px;">
                              <div class="Scrubber-before" style="height: 0%;"></div>
                              <div class="Scrubber-handle" style="height: 16.6667%;">
                                <div class="Scrubber-bar"></div>
                                <div class="Scrubber-info"><strong><span class="Scrubber-index">1</span> of <span
                                      class="Scrubber-count">10</span> posts</strong><span
                                    class="Scrubber-description">April 2023</span></div>
                              </div>
                              <div class="Scrubber-after" style="height: 83.3333%;"></div>
                              <div class="Scrubber-unread" style="top: 10%; height: 90%;">9 unread</div>
                            </div><a class="Scrubber-last"><i aria-hidden="true"
                                class="icon fas fa-angle-double-down "></i> Now</a>
                          </div>
                        </div>
                      </div>
                    </li> -->
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection