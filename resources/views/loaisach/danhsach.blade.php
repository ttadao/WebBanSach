@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Loại sách</div>
				<div class="card-body">
					<p><a class="btn btn-primary" href="{{ url('/loaisach/them') }}" role="button">Thêm loại sách</a></p>
					<table class="table table-bordered table-hover table-sm table-responsive">
						<thead>
							<tr>
								<th width="8%">#</th>
								<th width="76%">Tên loại sách</th>
								<th width="8%">Sửa</th>
								<th width="8%">Xóa</th>
							</tr>
						</thead>
						<tbody>
							@php $count = 1; @endphp
							@foreach($loaisach as $value)
								<tr>
									<td>{{ $count++ }}</td>
									<td>{{ $value->TenLoai }}</td>
									<td class="text-center"><a href="{{ url('/loaisach/sua/' . $value->MaLoai) }}" class="btn btn-warning btn-sm" style="width:50px;">Sửa</a></td>
									<td class="text-center"><a onclick="return confirm('Bạn có muốn xóa loại sách {{ $value->TenLoai }}?')" href="{{ url('/loaisach/xoa/' . $value->MaLoai) }}" class="btn btn-danger btn-sm" style="width:50px;">Xóa</a></td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection