@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<div class="card card-outline rounded-0 card-navy" style="background:none; box-shadow:none">

	<div class="card-body">
		<div class="">
			<div id="msg"></div>
			<form method="post" action="{{ $action }}" id="category-list">	
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label>Danh Mục</label>
					<input type="text" name="name" class="form-control" value="{{ isset($record->name)?$record->name:'' }}" required>
				</div>
				<div class="form-group">
					<label for="name">Mô tả</label>
					<input type="text" name="description" class="form-control" value="{{ isset($record->description)?$record->description:'' }}">
				</div>
                <div class="form-group">
                    <label for="type" class="control-label">Loại tài khoản</label>
                    <select name="status" id="type" class="form-control form-control-sm rounded-0" required>
                    <option value="1" {{ isset($record->status)?$record->status:1 }}>Active</option>
                    <option value="2" {{ isset($record->status)?$record->status:2 }}>Inactive</option>
                    </select>
                </div>
                <div class="form-group d-flex" style="margin-top:30px">
                    <div class="col-md-10">
                        <input type="submit" value="Lưu" class="btn btn-primary">
                        <a href="{{ url('backend/category') }}" class="btn btn-primary   rounded-0" form="category-list"><i class="fa fa-angle-left"></i> Trở về</a>
                    </div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection