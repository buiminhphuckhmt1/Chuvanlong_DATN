<!-- load file Layout.blade.php vào đây -->
@extends("admin.Layout")
@section("do-du-lieu-vao-layout")
<div class="card card-outline rounded-0 card-navy" style="background:none; box-shadow:none">
	<div class="card-header">
		<h3 class="card-title">List of posts</h3>
		<div class="card-tools">
			<a href="{{ url('backend/posts/create') }}" id="create_new" class="btn btn-flat btn-primary">Create New</a>
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
				</colgroup>
				<thead>
					<tr>
						<th>STT</th>
						<th>Ngày tạo</th>
						<th>Tài khoản</th>
						<th>Tiêu đề</th>
						<th>Trạng thái</th>
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
							<td>{{ $row->user_id }}</td>
							<td>{{ $row->title }}</td>
							<td class="text-center">
                                @if($row->status == 1)
                                    Hiện thị
                                @elseif($row->status  == 0)
                                    Ẩn
								@else
                                    N/A
                                @endif
                            </td>
							<td style="text-align:center">
				                    <a class="dropdown-item" href="{{ url('backend/posts/update/'.$row->id) }}"><span class="fa fa-edit text-dark"></span> Edit</a>
									<a class="dropdown-item" href="{{ url('backend/posts/view/'.$row->id) }}"><span class="fa fa-edit text-dark"></span> Xem</a>
				                    <a class="dropdown-item delete_data" href="{{ url('backend/posts/delete/'.$row->id) }}" onclick="return window.confirm('Are you sure?');"><span class="fa fa-trash text-danger"></span> Delete</a>
							</td>
						</tr>
                        @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection