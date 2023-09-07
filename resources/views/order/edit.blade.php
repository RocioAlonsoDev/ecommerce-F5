@extends('order.master')

@section('content')

<div class="card">
	<div class="card-header">Edit Order</div>
	<div class="card-body">
		<form method="post" action="{{ route('order.update', $order->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<input type="hidden" name="id" value="{{ $order->id }}">
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Estado</label>
				<select name="state" class="form-control">
						<option value="incomming">Entrante</option>
						<option value="doing">En marcha</option>
						<option value="close">Finalizado</option>
					</select>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Forma de pago</label>
				<div class="col-sm-10">
					<select name="payment" class="form-control">
						<option value="creditCard">Tarjeta</option>
						<option value="cash">Efectivo</option>
					</select>
				</div>
			</div>
			<div class="col-sm-10">
				<label class="col-sm-2 col-label-form">Entrega</label>
					<select name="delivery" class="form-control">
						<option value="delivery">Envío a domicilio</option>
						<option value="pickUp">Retira por local</option>
					</select>
			
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Comentarios</label>
				<div class="col-sm-10">
					<input type="text" name="comments" class="form-control"/>
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Guardar cambios" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')