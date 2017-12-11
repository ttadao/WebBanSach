@extends('layouts.app')

@section('content')

	<div id="slider" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" style="height: 360px;">
			<div class="carousel-item active">
				<img class="d-block w-100" src="{{ url('public/image/slider/004.gif')}}" alt="">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ url('public/image/slider/002.jpg')}}" alt="">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ url('public/image/slider/003.jpg')}}" alt="">
			</div>
		</div>
		<a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#slider" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="sanpham">
		@foreach($sachIndex as $value)
		<div class="card-deck">
			<div class="card" style="width: 20rem;">
				<img class="card-img-top" style="height: 200px; max-width: 150px;" src="{{ url('public/image/' . $value->AnhBia)}}" alt="Card image cap">
				<div class="card-body">
					<h4 class="card-title">{{$value->TenSach}}</h4>
					<p class="card-text">{{$value->TomTat}}</p>
					<p class="h6 font-weight-bold text-danger">{{ $value->DonGia }} đ </p>
					<button type="button" class="btn btn-outline-secondary">Thêm vào giỏ hàng</button>
				</div>
			</div>
		</div>
		@endforeach
	</div>
@endsection