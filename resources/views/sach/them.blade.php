@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Thêm sách mới</div>
				<div class="card-body">
                    <form action="{{ url('/sach/them') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
							<label for="TenSach">Tên sách <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control{{ $errors->has('TenSach') ? ' is-invalid' : '' }}" id="TenSach" name="TenSach" value="{{ old('TenSach') }}" placeholder="" required />
							@if($errors->has('TenSach'))
								<div class="invalid-feedback"><strong>{{ $errors->first('TenSach') }}</strong></div>
							@endif
						</div>
						<div class="form-group">
							<label for="MaLoai"> Loại sách <span class="text-danger font-weight-bold">*</span></label>
							<select class="form-control{{ $errors->has('MaLoai') ? ' is-invalid' : '' }}" id="MaLoai" name="MaLoai" required>
								<option value="">-- Chọn loại sách --</option>
								@foreach( $loaisach as $value)
									<option value="{{ $value->MaLoai }}">{{ $value->TenLoai }}</option>
								@endforeach
							</select>
							@if($errors->has('MaLoai'))
								<div class="invalid-feedback"><strong>{{ $errors->first('MaLoai') }}</strong></div>
							@endif
						</div>
						<div class="form-group">
							<label for="TomTat">Tóm tắt <span class="text-danger font-weight-bold">*</span></label>
							<textarea class="form-control{{ $errors->has('TomTat') ? ' is-invalid' : '' }}" id="TomTat" name="TomTat" placeholder="" required></textarea>
							@if($errors->has('TomTat'))
								<div class="invalid-feedback"><strong>{{ $errors->first('TomTat') }}</strong></div>
							@endif
						</div>
						<div class="form-group">
							<label for="NXB"> Nhà xuất bản<span class="text-danger font-weight-bold">*</span></label>
							<select class="form-control{{ $errors->has('NXB') ? ' is-invalid' : '' }}" id="NXB" name="NXB" required>
								<option value="">-- Chọn nhà xuất bản --</option>
								@foreach( $nxb as $value)
									<option value="{{ $value->MaNXB }}">{{ $value->TenNXB }}</option>
								@endforeach
							</select>
							@if($errors->has('NXB'))
								<div class="invalid-feedback"><strong>{{ $errors->first('NXB') }}</strong></div>
							@endif
						</div>
						<div class="form-group">
							<label for="SoLuong">Số lượng <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control{{ $errors->has('SoLuong') ? ' is-invalid' : '' }}" id="SoLuong" name="SoLuong" value="{{ old('SoLuong') }}" placeholder="" required />
							@if($errors->has('SoLuong'))
								<div class="invalid-feedback"><strong>{{ $errors->first('SoLuong') }}</strong></div>
							@endif
						</div>
						<div class="form-group">
							<label for="DonGia">Đơn giá <span class="text-danger font-weight-bold">*</span></label>
							<div class="row">
								<input type="text" class=" col-8 form-control{{ $errors->has('DonGia') ? ' is-invalid' : '' }}" id="DonGia" name="DonGia" value="{{ old('DonGia') }}" placeholder="" required />
								@if($errors->has('DonGia'))
									<div class="invalid-feedback"><strong>{{ $errors->first('DonGia') }}</strong></div>
								@endif
								<span class="input-group-addon col-1">đồng</span>
							</div>
						</div>
						<div class="form-group">
							<div class="form-group">
								<label for="AnhBia">Chọn ảnh</label>
								<input type="file" class="form-control-file" id="AnhBia" value="{{ $anhbia }}">
                                @if($errors->has('AnhBia'))
                                    <div class="invalid-feedback"><strong>{{ $errors->first('AnhBia') }}</strong></div>
                                @endif
                            </div>
						</div>
						<button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection