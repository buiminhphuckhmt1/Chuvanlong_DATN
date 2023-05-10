@extends("frontend.Layout")
@section("do-du-lieu-vao-layout")
    <div class="" data-select2-id="8">
        <div class=" shadow" style=" border-radius:9px; " data-select2-id="7">
            <div class="card-header">
                <h5 class="card-title">Tạo bài thảo luận mới</h5>
            </div>
            <div class="" data-select2-id="6">
                <div class="" data-select2-id="5">
                    <form method="post" action="{{ $action }}" id="post-form" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="modal-body">
                            <div class="row g-2">
                              <div class="col mb-0">
                                <label for="name">Tiêu đề</label>
                                <input type="text" name="title" class="form-control"
                                  value="" required>
                              </div>
                            </div>
                            <div class="row g-2">
                              <div class="col mb-0">
                                <label for="description"> Mô tả</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Nhập mô tả"></textarea>
                              </div>
                            </div>
                            <div class="row g-2">
                              <div class="col mb-0">
                                <label for="content"> Nội dung</label>
                                <textarea class="form-control" id="content" placeholder="Nhập nội dung" name="content"></textarea>
                                <script type="text/javascript">
                                  CKEDITOR.replace("content");
                                </script>
                              </div>
                            </div>
                            <div class="row g-2">
                                <div class="col">
                                    <label for="type" class="control-label">Tags</label>
                                    <select name="category_id" id="type" class="form-select" required>
                                    @foreach($datacate as $row)
                                        <option value="{{ $row->id}}">{{ $row->name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                              <div class="col">
                                <label for="type" class="control-label">Trạng thái</label>
                                <select name="status" id="type" class="form-select" required>
                                    <option value="1" {{ isset($record->status)?$record->status:1 }}>Hiện thị</option>
                                    <option value="2" {{ isset($record->status)?$record->status:2 }}>Ẩn</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <a href="{{url('frontend/home')}}"><button type="button" class="btn btn-outline-secondary"
                              data-bs-dismiss="modal">Trở về</button></a>
                            <button type="submit" form="post-form" value="Submit"
                              class="btn btn-primary">Lưu</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection