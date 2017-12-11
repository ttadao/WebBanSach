@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Sửa thông tin sách</div>
				<div class="card-body">
                    <form action="{{ url('/sach/sua') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $sach->MaSach }}" />
						<div class="form-group row">
							<label for="TenLoai" class="col-3" >Tên loại sách </label>
							<input type="text" readonly class=" col-6 form-control-plaintext form-control{{ $errors->has('TenLoai') ? ' is-invalid' : '' }}" id="TenSach" name="TenSach" value="{{ $sach->TenSach }}" placeholder="" />
						</div>
						<div class="form-group row">
							<label for="DonGia" class="col-3">Đơn giá <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class=" col-5 form-control{{ $errors->has('DonGia') ? ' is-invalid' : '' }}" id="DonGia" name="DonGia" value="{{ $sach->DonGia }}" placeholder="" />
							@if($errors->has('Đơn giá'))
								<div class="invalid-feedback"><strong>{{ $errors->first('DonGia') }}</strong></div>
							@endif
                            <span class="input-group-addon col-1">đồng</span>
						</div>
						<div class="form-group row">
							<label for="SoLuong" class="col-3">Số lượng <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="col-6 form-control{{ $errors->has('SoLuong') ? ' is-invalid' : '' }}" id="SoLuong" name="SoLuong" value="{{ $sach->SoLuong }}" placeholder="" />
							@if($errors->has('Số lượng'))
								<div class="invalid-feedback"><strong>{{ $errors->first('SoLuong') }}</strong></div>
							@endif
						</div>
						
						<button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection