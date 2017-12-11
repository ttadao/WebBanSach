@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">Hình ảnh</div>
				<div class="card-body">
					<div class="card-deck">
						@foreach($hinhanh as $value)
							<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
								<div class="card">
									<img class="card-img-top" src="{{ $hinhanhdautien[$value->id] }}" alt="" />
									<div class="card-body">
										<p class="card-title"><a href="{{ url('/hinhanh/' . $value->id) }}">{{ $value->tieu_de }}</a></p>
									</div>
									<div class="card-footer">
										<small class="text-muted">{{ $ngaydang[$value->id] }}</small>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection