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
					<form role="form" method="post" action="{{ route('password.email') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="email">Địa chỉ email đã đăng ký</label>
							<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required />
							@if ($errors->has('email'))
								<div class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></div>
							@endif
						</div>
						
						<button type="submit" class="btn btn-primary">Gởi email khôi phục</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection