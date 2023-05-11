@extends("frontend.Layout1")
@section("do-du-lieu-vao-layout1")
<div class="container">
<div class="row mb-5 mt-7 py-sm-5">
    <div>
        <a href="{{ url('frontend/posts/create')}}">
            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#basicModal">Tạo bài thảo luận</button>
        </a>
        <a href="{{ url('frontend/home')}}">
            <button type="button" class="btn btn-primary mx-3 mb-4" data-bs-toggle="modal" data-bs-target="#basicModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zM8.999 17H7v-1.999l5.53-5.522 1.999 1.999L8.999 17zm6.473-6.465-1.999-1.999 1.524-1.523 1.999 1.999-1.524 1.523z"></path></svg>
                Tất cả câu hỏi
            </button>
        </a>
        <h5>Tag</h5>
        <p>Tag là từ khóa hoặc nhãn phân loại bài thảo luận của bạn với các bài thảo luận tương tự khác.</br> Sử dụng đúng thẻ giúp người khác tìm và trả lời câu hỏi của bạn dễ dàng hơn.</p>
    </div>
    @foreach ($post as $row)
                <div class="col-md-6 col-lg-3">
                  <div class=" card p-4 mx-0 my-3">
                    <div class="min-vh-20">
                        <a  href="{{url('frontend/tag/'.$row->id)}}"><span class="badge bg-label-primary me-1">{{$row->name}}</span></a>
                      <p class="card-text" style="display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;">{{$row->description}}</p>
                      <div style="display:flex; justify-content: space-between;">
                      <p class="mb-0" style="font-size:12px;">{{$row->posts->count()}} câu hỏi</p>
                      <p class=" mb-0" style="font-size:12px;">{{$post_date}} câu hỏi hôm nay</p>
                      </div>
                    </div>
                  </div>
                </div>
    @endforeach
</div>
</div>
@endsection