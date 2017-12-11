@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Thêm nhà xuất bản</div>
				<div class="card-body">
                    <form action="{{ url('/nhaxuatban/them') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
							<label for="TenNXB">Tên nhà xuất bản <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control{{ $errors->has('TenNXB') ? ' is-invalid' : '' }}" id="TenNXB" name="TenNXB" value="{{ old('TenNXB') }}" placeholder="" required />
							@if($errors->has('TenNXB'))
								<div class="invalid-feedback"><strong>{{ $errors->first('TenNXB') }}</strong></div>
							@endif
						</div>
						
						<button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection