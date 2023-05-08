@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<div class="card card-outline rounded-0 card-navy" style="background:none; box-shadow:none">
	@if(Request::get("notify") == "username-exists")
	<div class="alert alert-danger">Tài khoản đã tồn tại</div>
	@endif
	@if(Request::get("notify") == "email-exists")
	<div class="alert alert-danger" role="alert">email đã được đăng ký</div>
	@endif
  @if(Request::get("notify") == "creat-success")
		<div class="alert alert-primary" role="alert">Cập nhật tài khoản thành công</div>
	@endif
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lý bảng/ Quản lý tài khoản/</span> Sửa thông tin</h4>
              <div class="row">
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Thông tin tài khoản</h5>
                    </div>
                    <div class="card-body">
                      <form method="post" action="{{ $action }}" id="formupdateuser" enctype="multipart/form-data">
					  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Họ</label>
                          <div class="col-sm-10">
						  <input type="text" name="firstname" id="firstname" class="form-control" value="{{ isset($record->firstname)?$record->firstname:'' }}" required>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Tên đệm</label>
                          <div class="col-sm-10">
						  <input type="text" name="middlename" id="middlename" class="form-control" value="{{ isset($record->middlename)?$record->middlename:'' }}">
                          </div>
                        </div>
						<div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Tên</label>
                          <div class="col-sm-10">
						  <input type="text" name="lastname" id="lastname" class="form-control" value="{{ isset($record->lastname)?$record->lastname:'' }}" required>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                          <div class="col-sm-10">
							<input type="email" name="email" id="email" class="form-control" value="{{ isset($record->email)?$record->email:'' }}" required >
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Tài khoản</label>
                          <div class="col-sm-10">
						  <input type="text" name="username" id="username" class="form-control" value="{{ isset($record->username)?$record->username:'' }}" readonly >
                          </div>
                        </div>
						<div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Mật khẩu</label>
                          <div class="col-sm-10">
						  <input type="password" name="password" id="password" class="form-control" >
						  <small><i>Để trống phần này nếu bạn không muốn thay đổi mật khẩu...</i></small>                          
						</div>
                        </div>
						<div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Loại tài khoản</label>
                          <div class="col-sm-10">
						  		<select name="type" id="type" class="form-select" required>
									<option value="1" {{ isset($record->type)?$record->type:'' }}>Quản trị</option>
									<option value="2" {{ isset($record->type)?$record->type:'' }}>Người dùng</option>
								</select>                          
						  </div>
                        </div>
						<div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Ảnh</label>
                          <div class="col-sm-10">
						  <input class="form-control" type="file" id="formFile" name="avatar">
                          </div>
                        </div>
                        <div class="row mb-3">
						<!-- <div class="form-group d-flex justify-content-center">
							<img src="{{asset('upload/user/'.$record->avatar)}}" alt="" id="cimg" class="img-fluid img-thumbnail">
						</div> -->
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" form="formupdateuser" value="submit" class="btn btn-primary">Cập nhật</button>
							<a href="{{ url('backend/users') }}"><button type="button" class="btn btn-primary"><i class="fa fa-angle-left"></i>Trở lại</button></a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection