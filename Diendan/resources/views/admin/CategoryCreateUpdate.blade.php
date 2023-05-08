@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<div class="card card-outline rounded-0 card-navy" style="background:none; box-shadow:none">
  @if(Request::get("notify") == "updatecr-success")
		<div class="alert alert-primary" role="alert">Cập nhật danh mục thành công</div>
	@endif
  <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lý bảng/ Quản lý danh mục/</span> Sửa thông tin</h4>
              <div class="row">
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Thông tin danh mục</h5>
                    </div>
                    <div class="card-body">
                      <form method="post" action="{{ $action }}" id="category-list">
					  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Tên danh mục</label>
                          <div class="col-sm-10">
						  <input type="text" name="name" class="form-control" value="{{ isset($record->name)?$record->name:'' }}" readonly>
                          </div>
                        </div>
						<div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Mô tả</label>
                          <div class="col-sm-10">
						  <textarea type="text" name="description" class="form-control" value="{{ isset($record->description)?$record->description:'' }}"></textarea>          
						</div>
                        </div>
						<div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Trạng thái</label>
						  <div class="col-sm-10">
						  <select name="status" id="type" class="form-select" required>
							<option value="1" {{ isset($record->status)?$record->status:1 }}>Hiện thị</option>
							<option value="2" {{ isset($record->status)?$record->status:2 }}>Ẩn</option>
						  </select>
							</div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" form="category_list" value="submit" class="btn btn-primary">Cập nhật</button>
							<a href="{{ url('backend/category') }}"><button type="button" class="btn btn-primary"><i class="fa fa-angle-left"></i>Trở lại</button></a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
</div>
@endsection