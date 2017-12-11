@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Đăng hình ảnh</div>
				<div class="card-body">
                    <form action="{{ url('/hinhanh/them') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
							<label for="tieu_de">Tiêu đề album <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control{{ $errors->has('tieu_de') ? ' is-invalid' : '' }}" id="tieu_de" name="tieu_de" value="{{ old('tieu_de') }}" placeholder="" required />
							@if($errors->has('tieu_de'))
								<div class="invalid-feedback"><strong>{{ $errors->first('tieu_de') }}</strong></div>
							@endif
						</div>
						<div class="form-group">
							<label for="thu_muc">Thư mục chứa ảnh <span class="text-danger font-weight-bold">*</span></label>
							<div class="input-group mb-2 mb-sm-0">
								<div class="input-group-addon"><a href="#" onclick="BrowseServer();">Upload hình vào thư mục</a></div>
								<input type="text" class="form-control{{ $errors->has('thu_muc') ? ' is-invalid' : '' }}" id="thu_muc" name="thu_muc" value="{{ $folder }}" placeholder="" readonly required />
								@if($errors->has('thu_muc'))
									<div class="invalid-feedback"><strong>{{ $errors->first('thu_muc') }}</strong></div>
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