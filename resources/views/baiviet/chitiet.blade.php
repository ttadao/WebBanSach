@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">{{ $baiviet->tieu_de }}</div>
				<div class="card-body">
					<p>{{ $baiviet->tom_tat }}</p>
					<p>{!! $baiviet->noi_dung !!}</p>
				</div>
			</div>
		</div>
	</div>
@endsection