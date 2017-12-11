@extends('layouts.app')

@section('content')
	<div class="row justify-content-center">
		<div class="col-12 col-md-auto">
			<div class="card">
				<div class="card-header">Khôi phục mật khẩu</div>
				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							{{ session('status') }}
						</div>
					@endif
					<form role="form" method="post" action="{{ route('password.request') }}">
						{{ csrf_field() }}
						<input type="hidden" name="token" value="{{ $token }}" />
						<div class="form-group">
							<label for="email">Địa chỉ email</label>
							<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ $email or old('email') }}" />
							@if ($errors->has('email'))
								<div class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></div>
							@endif
						</div>
						<div class="form-group">
							<label for="password">Mật khẩu mới</label>
							<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" />
							@if ($errors->has('password'))
								<div class="invalid-feedback"><strong>{{ $errors->first('password') }}</strong></div>
							@endif
						</div>
						<div class="form-group">
							<label for="password-confirm">Xác nhận mật khẩu mới</label>
							<input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" id="password-confirm" name="password_confirmation" />
							@if ($errors->has('password_confirmation'))
								<div class="invalid-feedback"><strong>{{ $errors->first('password_confirmation') }}</strong></div>
							@endif
						</div>
						
						<button type="submit" class="btn btn-primary">Khôi phục</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection