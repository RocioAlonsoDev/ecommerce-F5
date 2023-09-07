@extends('order.master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Ordenes</b></div>
			<div class="col col-md-6">
				<a href="{{ route('order.index') }}" class="btn btn-primary btn-sm float-end">Ver todas</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Numero</b></label>
			<div class="col-sm-10">
				{{ $order->id }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Estado</b></label>
			<div class="col-sm-10">
				{{ $order->state }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Pago</b></label>
			<div class="col-sm-10">
				{{ $order->payment }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Delivery</b></label>
			<div class="col-sm-10">
				{{ $order->delivery }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Comentarios</b></label>
			<div class="col-sm-10">
				{{ $order->comments }}
			</div>
		</div>
	</div>
</div>

@endsection('content')