<!-- load file Layout.blade.php vào đây -->
@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Quản lý bảng /</span> Quản lý danh mục
              </h4>
              <div class="col-lg-4 col-md-6">
                <!-- <a href="{{ url('backend/category/create') }}" id="create_new" class="btn btn-flat btn-primary">Create New</a> -->
                <div class="mt-3">
                  <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal"
                    data-bs-target="#basicModal">Tạo danh mục</button>
                  <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel1">Tạo danh mục</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post" action="{{ $action }}" id="category-list">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="modal-body">
                            <div class="row g-2">
                              <div class="col mb-0">
                                <label for="name">Danh mục</label>
                                <input type="text" name="name" class="form-control"
                                  value="{{ isset($record->name)?$record->name:'' }}" required>
                              </div>
                            </div>
                            <div class="row g-2">
                              <div class="col mb-0">
                                <label for="password"> Mô tả</label>
                                <textarea type="text" name="description" class="form-control"
                                  value="{{ isset($record->description)?$record->description:'' }}"> </textarea>
                              </div>
                            </div>
                            <div class="row g-2">
                              <label for="type" class="control-label">Loại tài khoản</label>
                              <select name="status" id="type" class="form-select" required>
                                <option value="1" {{ isset($record->status)?$record->status:1 }}>Hiện thị</option>
                                <option value="2" {{ isset($record->status)?$record->status:2 }}>Ẩn</option>
                              </select>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                              data-bs-dismiss="modal">Đóng</button>
                            <button type="submit" form="category-list" value="Submit"
                              class="btn btn-primary">Lưu</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @if(Request::get("notify") == "category-exists")
              <div class="alert alert-danger">Danh mục đã tồn tại !</div>
              @endif
              @if(Request::get("notify") == "creatcr-success")
              <div class="alert alert-primary" role="alert">Tạo danh mục thành công</div>
              @endif
              @if(Request::get("notify") == "delete-success")
              <div class="alert alert-danger">Đã xóa danh mục !</div>
              @endif
              <div class="card">
                <h5 class="card-header">Danh sách danh mục</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>Ngày tạo</th>
                        <th>Tên danh mục</th>
                        <th style="max-width:400px">Mô tả</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" style="text-align: center;">
                      <?php 
                                $stt=1;
                              ?>
                      @foreach($data as $row)
                      <tr>
                        <td class="text-center">{{$stt++}}</td>
                        <td>{{ $row->date_updated }}</td>
                        <td>{{ $row->name }}</td>
                        <td style="max-width:400px">{{ $row->description }}</td>
                        <td style="text-align: center;">
                          @if ($row->status == 1)
                          <span class="badge bg-label-primary me-1">Hiện thị</span>
                          @elseif ($row->status == 2)
                          <span class="badge bg-label-primary me-1">Ẩn</span>
                          @endif
                        </td>
                        <td>
                          <div class="dropdown" style="text-align: center;">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ url('backend/category/update/'.$row->id) }}"><i
                                  class="bx bx-edit-alt me-1"></i> Sửa</a>
                              <a class="dropdown-item" href="{{ url('backend/category/delete/'.$row->id) }}"
                                onclick="return window.confirm('Bạn có xác nhận xóa không');"><i
                                  class="bx bx-trash me-1"></i> Xóa</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div style="margin:20px 0;"></div>
              {{ $data->links('admin.pagination-cus') }}
            </div>
          </div>
@endsection