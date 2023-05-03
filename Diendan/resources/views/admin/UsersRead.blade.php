<!-- load file Layout.blade.php vào đây -->
@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<div class="card card-outline rounded-0 card-navy" style="background:none; box-shadow:none">
	<div class="card-header">
		<h3 class="card-title">List of Users</h3>
		<div class="card-tools">
			<a href="{{ url('backend/users/create') }}" id="create_new" class="btn btn-flat btn-primary">Create New</a>
		</div>
	</div>
	<div class="card-body">
        <div class="">
			<table class="table table-hover table-striped table-bordered" id="list">
				<colgroup>
					<col width="3%">
					<col width="17%">
					<col width="15%">
					<col width="25%">
					<col width="15%">
					<col width="15%">
					<col width="15%">
				</colgroup>
				<thead>
					<tr>
						<th>STT</th>
						<th>Ngày cập nhật</th>
						<th>Ảnh đại diện</th>
						<th>Họ tên</th>
						<th>Tài khoản</th>
						<th>Loại tài khoản</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
                <?php 
					$stt=1;
				?>
                @foreach($data as $row)
						<tr>
                            <td class="text-center">{{$stt++}}</td>
							<td>{{ $row->date_updated }}</td>
							<td class="text-center">
                           
                                <img src="{{asset('upload/user/'.$row->avatar)}}" class="img-thumbnail rounded-circle user-avatar">
                           
                            </td>
							<td>{{ $row->firstname }} {{ $row->middlename }} {{ $row->lastname }}</td>
							<td>{{ $row->username }}</td>
							<td class="text-center">

                                @if ($row->type == 1)
                                    Administrator
                                @elseif ($row->type  == 2)
                                    Registered User
                                @else
                                    N/A
                                @endif
                            </td>
							<td style="text-align:center">
				                    <a class="dropdown-item" href="{{ url('backend/users/update/'.$row->id) }}"><span class="fa fa-edit text-dark"></span> Edit</a>
				                    <a class="dropdown-item delete_data" href="{{ url('backend/users/delete/'.$row->id) }}" onclick="return window.confirm('Are you sure?');"><span class="fa fa-trash text-danger"></span> Delete</a>
							</td>
						</tr>
                        @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection