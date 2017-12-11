@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Thêm loại sách</div>
				<div class="card-body">
                    <form action="{{ url('/loaisach/them') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
							<label for="TenLoai">Loại sách <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control{{ $errors->has('TenLoai') ? ' is-invalid' : '' }}" id="TenLoai" name="TenLoai" value="{{ old('TenLoai') }}" placeholder="" required />
							@if($errors->has('TenLoai'))
								<div class="invalid-feedback"><strong>{{ $errors->first('TenLoai') }}</strong></div>
							@endif
						</div>
						
						<button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection