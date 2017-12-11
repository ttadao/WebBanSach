@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Sửa loại sách</div>
				<div class="card-body">
                    <form action="{{ url('/loaisach/sua') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $loaisach->MaLoai }}" />
						<div class="form-group">
							<label for="TenLoai">Tên loại sách <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control{{ $errors->has('TenLoai') ? ' is-invalid' : '' }}" id="TenLoai" name="TenLoai" value="{{ $loaisach->TenLoai }}" placeholder="" required />
							@if($errors->has('Loại sách'))
								<div class="invalid-feedback"><strong>{{ $errors->first('TenLoai') }}</strong></div>
							@endif
						</div>
						
						<button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection