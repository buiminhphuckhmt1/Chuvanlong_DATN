@extends("admin.Layout")
@section("do-du-lieu-vao-layout")

<div class="card card-outline rounded-0 card-navy" style="background:none; box-shadow:none">
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lý bảng/ Quản lý bài thảo luận/</span> Sửa bài thảo luận</h4>
              <div class="row">
                <div class="col-xxl">
                <form method="post" action="{{ $action }}" id="post-form" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card mb-4">
                    <h5 class="card-header">Thông tin bài thảo luận</h5>
                    <div class="card-body">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                          <label for="name">Tiêu đề</label>
                            <input class="form-control" type="text" class="form-control rounded-0" name="title" id="title" value="{{ isset($record->title)?$record->title:'' }}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="name">Mô tả</label>
					        <textarea class="form-control" id="description" name="description">{{ isset($record->description)?$record->description:'' }}</textarea>
                          </div>
                          <div class="mb-3 col-md-6">
                          <label for="name">Danh mục</label>
                            <select class="form-select" name="category_id" id="category_id" data-select2-id="category_id" tabindex="-1" aria-hidden="true">
                                <!-- <option value="value="{{$record->id }}"></option> -->
                                @foreach($datacate as $row)
                                <option value="{{$row->id }}" {{ ( $row->id == $record->category_id) ? 'selected' : '' }}>{{ $row->name }}</option>
                                @endforeach    
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="status" class="control-label">Trạng thái</label>
                            <select name="status" id="type" class="form-select" required>
                                <option value="1" @if($record->status=='1'){{ 'selected' }} @endif>Hiện thị</option>
                                <option value="0" @if($record->status=='0'){{ 'selected' }} @endif>Ẩn</option>
                            </select>
                          </div>
                          <div class="mb-3 col-md-12">
                          <label for="name">Nội dung</label>
					        <textarea class="form-control" id="content" name="content">{{ isset($record->content)?$record->content:'' }}</textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace("content");
                            </script>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2" form="post-form">Lưu</button>
                          <a href="{{ url('backend/posts') }}" class="btn btn-primary   rounded-0" form="manage-user"><i class="fa fa-angle-left"></i> Trở về</a>
                        </div>
                    </div>
                    <!-- /Account -->
                  </div>
                </form>
              </div>
            </div>
          </div>
@endsection