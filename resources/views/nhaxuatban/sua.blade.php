@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Sửa nhà xuất bản</div>
				<div class="card-body">
                    <form action="{{ url('/nhaxuatban/sua') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $nxb->MaNXB }}" />
						<div class="form-group">
							<label for="TenNXB">Tên nhà xuất bản <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control{{ $errors->has('TenNXB') ? ' is-invalid' : '' }}" id="TenNXB" name="TenNXB" value="{{ $nxb->TenNXB }}" placeholder="" required />
							@if($errors->has('Tên nhà xuất bản'))
								<div class="invalid-feedback"><strong>{{ $errors->first('TenNXB') }}</strong></div>
							@endif
						</div>
						
						<button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection