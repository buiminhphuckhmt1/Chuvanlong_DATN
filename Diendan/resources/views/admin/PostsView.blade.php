@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<div class="content-wrapper ">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lý bảng / Quản lý bài thảo luận /</span>  Bài thảo luận chi tiết</h4>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Bài thảo luận chi tiết</h4>
            </div>
            <div class="card-body">
            <div class="d-flex mb-3">
                <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                        <img src="{{asset('upload/user/'.$dataview->user->avatar)}}" alt="" class="w-px-40 h-px-40 rounded-circle">
                    </div>
                </div>
                <div class="flex-grow-1">
                    <span class="fw-semibold d-block">{{$dataview->user->firstname}} {{$dataview->user->middlename}} {{$dataview->user->lastname}}</span>
                    <small class="text-muted">
                    @if ($dataview->user->type == 1)
                        <span class="badge bg-label-primary me-1">Quản Trị</span>
                    @elseif ($dataview->user->type  == 2)
                          <span class="badge bg-label-primary me-1">Người dùng</span>
                    @endif
                    </small>
                    <small class="text-muted"><span> </span> {{ date('d/m/Y', strtotime($dataview->date_updated)) }} </small>
                </div>
            </div>
                <span class="badge bg-label-primary mb-3">{{ $dataview->category->name}} </span>
                <h5 class="card-title text-uppercase">{{ $dataview->title }}</h5>
                
                <h6 class="card-subtitle text-muted">{{$dataview->description }}</h6>
                <p class="card-text">
                    
                </p>
                {!! @$dataview->content !!}
            </div>
            @foreach($comments as $comment)
            <div class="card-body border-2 border-top">
            <a href="{{ url('backend/posts/deletecmt/'.$comment->id) }}" class=" float-end  rounded-0" form="manage-user"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg></a>
            <div class="flex-grow-1">
                    <span class="fw-semibold d-block">{{$comment->user->firstname}} {{$comment->user->middlename}} {{$comment->user->lastname}} </span>
                    
                    <small class="text-muted"><span> </span> {{ date('d/m/Y', strtotime($comment->date_created)) }} </small>
                </div>
                {!! @$comment->comment !!}
            </div>
            @endforeach
            <div class="card-footer py-1 text-right mb-3">
                <a href="{{ url('backend/posts') }}" class="btn btn-primary   rounded-0" form="manage-user"><i class="fa fa-angle-left"></i> Trở về</a>
            </div>
        </div> 
    </div> 
</div>        
@endsection