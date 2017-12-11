@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Đăng bài viết</div>
				<div class="card-body">
                    <form action="{{ url('/baiviet/them') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
							<label for="tieu_de">Tiêu đề <span class="text-danger font-weight-bold">*</span></label>
							<input type="text" class="form-control{{ $errors->has('tieu_de') ? ' is-invalid' : '' }}" id="tieu_de" name="tieu_de" value="{{ old('tieu_de') }}" placeholder="" required />
							@if($errors->has('tieu_de'))
								<div class="invalid-feedback"><strong>{{ $errors->first('tieu_de') }}</strong></div>
							@endif
						</div>
						<div class="form-group">
							<label for="id_chu_de">Chủ đề <span class="text-danger font-weight-bold">*</span></label>
							<select class="form-control{{ $errors->has('id_chu_de') ? ' is-invalid' : '' }}" id="id_chu_de" name="id_chu_de" required>
								<option value="">-- Chọn chủ đề --</option>
								@foreach($chude as $value)
									<option value="{{ $value->id }}">{{ $value->ten_chu_de }}</option>
								@endforeach
							</select>
							@if($errors->has('id_chu_de'))
								<div class="invalid-feedback"><strong>{{ $errors->first('id_chu_de') }}</strong></div>
							@endif
						</div>
						<div class="form-group">
							<label for="tom_tat">Tóm tắt <span class="text-danger font-weight-bold">*</span></label>
							<textarea class="form-control{{ $errors->has('tom_tat') ? ' is-invalid' : '' }}" id="tom_tat" name="tom_tat" placeholder="" required></textarea>
							@if($errors->has('tom_tat'))
								<div class="invalid-feedback"><strong>{{ $errors->first('tom_tat') }}</strong></div>
							@endif
						</div>
						<div class="form-group">
							<label for="noi_dung">Nội dung bài viết<span class="text-danger font-weight-bold">*</span></label>
							<textarea class="ckeditor form-control{{ $errors->has('noi_dung') ? ' is-invalid' : '' }}" id="noi_dung" name="noi_dung" placeholder="" required></textarea>
							@if($errors->has('noi_dung'))
								<div class="invalid-feedback"><strong>{{ $errors->first('noi_dung') }}</strong></div>
							@endif
						</div>
						
						<button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection