<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link href="{{ asset('public/css/app.css') }}" type="text/css" rel="stylesheet" />
	<link href="{{ asset('public/css/custom.css') }}" type="text/css" rel="stylesheet" />

</head>
<body>
    <div class="container">
		<nav class="navbar navbar-dark navbar-expand-lg bg-dark text-white">
			<a class="navbar-brand" href="{{ url('/') }}">
				{{ config('app.name', 'Laravel') }}
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Điều hướng">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					@if (Auth::guest())
						<li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Đăng nhập</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Đăng ký</a></li>
					@else
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#tongquan" id="navbarQuanLy" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý</a>
							<div class="dropdown-menu" aria-labelledby="navbarQuanLy">
								<a class="dropdown-item" href="{{ url('/nhaxuatban') }}">Quản lý nhà xuất bản</a>
								<a class="dropdown-item" href="{{ url('/loaisach') }}">Quản lý loại sách</a>
								<a class="dropdown-item" href="{{ url('/sach') }}">Danh sách sách</a>
								<a class="dropdown-item" href="#">Quản lý người dùng</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#tongquan" id="navbarTaiKhoan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
							<div class="dropdown-menu" aria-labelledby="navbarTaiKhoan">
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng xuất</a>
								<form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">{{ csrf_field() }}</form>
								<a class="dropdown-item" href="{{ url('/nguoidung/doimatkhau') }}"><i class="fa fa-key" aria-hidden="true"></i> Đổi mật khẩu</a>
							</div>
						</li>
                    @endif
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-0" type="search" placeholder="Search">
						<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
					</form>
                </ul>
            </div>
        </nav>
		
        @yield('content')
		
		<hr />
		<footer class="footer fixed-bottom"><p>&copy; {{ @date("Y") }} {{ config('app.name', 'Laravel') }}</p></footer>
    </div>

    <script src="{{asset('public/js/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('public/js/popper.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('public/js/app.js') }}" type="text/javascript"></script>
    <script src="{{asset('public/js/jssor.slider-26.3.0.min.js')}}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
