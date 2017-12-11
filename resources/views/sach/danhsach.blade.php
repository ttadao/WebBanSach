@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Quản lý sách</div>
				<div class="card-body">
					<p><a class="btn btn-primary" href="{{ url('/sach/them') }}" role="button">Thêm sách mới</a></p>
					<table class="table table-bordered table-hover table-sm table-responsive">
						<thead>
							<tr>
								<th width="4%">#</th>
								<th width="10%">Ảnh bìa</th>
								<th width="24%">Tên sách</th>
								<th width="10%">Loại sách</th>
								<th width="10%">Nhà xuất bản</th>
								<th width="22%">Tóm tắt</th>
								<th width="8%">Chi tiết</th>
								<th width="6%">Sửa</th>
								<th width="6%">Xóa</th>
							</tr>
						</thead>
						<tbody>
							@php $count = 1; @endphp
							@foreach($sach as $value)
								<tr>
									<td>{{ $count++ }}</td>
									<td><img src="{{ url('public/image/' . $value->AnhBia)}}" alt="AnhBia" class="img-thumbnail"></td>
									<td>{{ $value->TenSach }}</td>
									<td>{{ $value->TenLoai }}<br /></td>
									<td>{{ $value->TenNXB }}</td>
									<td>{{ $value->TomTat }}</td>
									<td class="text-center"><a href="{{ url('/sach/chitiet/' . $value->MaSach ) }}" class="btn btn-success btn-sm" style="width:80px;">Chi tiết</a></td>
									<td class="text-center"><a href="{{ url('/sach/sua/' . $value->MaSach ) }}" class="btn btn-warning btn-sm" style="width:50px;">Sửa</a></td>
									<td class="text-center"><a onclick="return confirm('Bạn có muốn xóa sách {{ $value->TenSach }}?')" href="{{ url('/sach/xoa/' . $value->MaSach) }}" class="btn btn-danger btn-sm" style="width:50px;">Xóa</a></td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection