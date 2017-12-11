@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">{{ $hinhanh->tieu_de }}</div>
				<div class="card-body">
					<div class="card-deck">
						@foreach($files as $value)
							<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
								<div class="card">
									<a class="xemAnh" href="{{ url('storage/app/' . $value) }}" title="{{ $hinhanh->tieu_de }}"><img class="card-img-top" src="{{ url('storage/app/' . $value) }}" alt="" /></a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('javascript')
	<script src="{{ asset('public/js/jquery.colorbox-min.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".xemAnh").colorbox({rel:'xemAnh', transition:"fade", width:"75%"});
		});
	</script>
@endsection