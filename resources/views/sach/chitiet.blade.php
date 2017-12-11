@extends('layouts.app')

@section('content')
	<div class="row" xmlns="http://www.w3.org/1999/html">
			<div class="card col-6">
				<div class="container">
					<img class="mw-100 mh-100" src="{{ url('public/image/' . $sach->AnhBia)}}" alt="Max-width 100%">
				</div>
			</div>
			<div class="card col-6">
				<div class="card-header h1">{{ $sach->TenSach }}</div>
				<div class="card-body">
					<p class="font-italic">{{ $sach->TomTat }}</p>
					<p class="h2 font-weight-bold text-danger">{{ $sach->DonGia }} đ <span class="text-secondary h6"> Đã có VAT</span> </p>
					<button type="button" class="btn btn-outline-secondary">Thêm vào giỏ hàng</button>
				</div>
			</div>
	</div>
@endsection