@extends('layouts.app')

@section('content')
	<div class="row justify-content-center">
		<div class="col-12 col-md-auto">
			<div class="card">
				<div class="card-header">Đăng nhập</div>
				<div class="card-body">
					<form role="form" method="post" action="{{ route('login') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" placeholder="" required />
							@if ($errors->has('email'))
								<div class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></div>
							@endif
						</div>
						<div class="form-group">
							<label for="password">Mật khẩu</label>
							<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="" required />
							@if ($errors->has('password'))
								<div class="invalid-feedback"><strong>{{ $errors->first('password') }}</strong></div>
							@endif
						</div>
						<div class="form-group">
							<div class="form-check">
								<label class="custom-control custom-checkbox form-check-label">
									<input class="custom-control-input form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} />
									<span class="custom-control-indicator"></span>
									<span class="custom-control-description">Duy trì đăng nhập</span>
								</label>
							</div>
						</div>
						
						<button type="submit" class="btn btn-primary">Đăng nhập</button> hoặc <a href="{{ route('password.request') }}">Quên mật khẩu?</a>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection