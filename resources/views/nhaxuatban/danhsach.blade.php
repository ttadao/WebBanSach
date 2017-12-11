@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Danh sách các nhà xuất bản</div>
				<div class="card-body">
					<p><a class="btn btn-primary" href="{{ url('/nhaxuatban/them') }}" role="button">Thêm nhà xuất bản</a></p>
					<table class="table table-bordered table-hover table-sm table-responsive">
						<thead>
							<tr>
								<th width="8%">#</th>
								<th width="76%">Tên nhà xuất bản</th>
								<th width="8%">Sửa</th>
								<th width="8%">Xóa</th>
							</tr>
						</thead>
						<tbody>
							@php $count = 1; @endphp
							@foreach($nxb as $value)
								<tr>
									<td>{{ $count++ }}</td>
									<td>{{ $value->TenNXB }}</td>
									<td class="text-center"><a href="{{ url('/nhaxuatban/sua/' . $value->MaNXB) }}" class="btn btn-warning btn-sm" style="width:50px;">Sửa</a></td>
									<td class="text-center"><a onclick="return confirm('Bạn có muốn xóa nhà xuất bản {{ $value->TenNXB }}?')" href="{{ url('/nhaxuatban/xoa/' . $value->MaNXB) }}" class="btn btn-danger btn-sm" style="width:50px;">Xóa</a></td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection