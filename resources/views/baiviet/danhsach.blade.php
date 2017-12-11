@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Quản lý bài viết</div>
				<div class="card-body">
					<p><a class="btn btn-primary" href="{{ url('/baiviet/them') }}" role="button">Thêm bài viết</a></p>
					<table class="table table-bordered table-hover table-sm table-responsive">
						<thead>
							<tr>
								<th width="5%">#</th>
								<th width="10%">Tên chủ đề</th>
								<th width="41%">Tiêu đề</th>
								<th width="10%">Ngày tạo</th>
								<th width="10%">Ngày sửa</th>
								<th width="8%">O/F</th>
								<th width="8%">Sửa</th>
								<th width="8%">Xóa</th>
							</tr>
						</thead>
						<tbody>
							@php $count = 1; @endphp
							@foreach($baiviet as $value)
								<tr>
									<td>{{ $count++ }}</td>
									<td>{{ $value->ten_chu_de }}</td>
									<td>{{ $value->tieu_de }}<br /><span class='small text-muted'>Đăng bởi {{ $value->name }}, có {{ $value->luot_xem }} lượt xem.</span></td>
									<td>{{ $value->created_at  }}</td>
									<td>{{ $value->updated_at  }}</td>
									<td>
										@if($value->kiem_duyet == 1)
											<a href="{{ url('/baiviet/' . $value->id . '/duyet/0') }}"><span class="badge badge-success">Đã duyệt</span></a>
										@else
											<a href="{{ url('/baiviet/' . $value->id . '/duyet/1') }}"><span class="badge badge-warning">Chưa duyệt</span></a>
										@endif
									</td>
									<td class="text-center"><a href="{{ url('/baiviet/sua/' . $value->id) }}" class="btn btn-warning btn-sm" style="width:50px;">Sửa</a></td>
									<td class="text-center"><a onclick="return confirm('Bạn có muốn xóa bài viết {{ $value->tieu_de }}?')" href="{{ url('/baiviet/xoa/' . $value->id) }}" class="btn btn-danger btn-sm" style="width:50px;">Xóa</a></td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection