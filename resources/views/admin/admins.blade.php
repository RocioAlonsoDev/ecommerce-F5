@extends('admin.admin-dashboard')
@section('admin')
<br><br><br><br>
<h1>Permisos</h1>
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Ordenes</b></div>
			<div class="col col-md-6">
				<a href="{{ route('dish.create') }}" class="btn btn-success btn-sm float-end">Añadir</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>Usuario</th>
				<th>Estado</th>
				<th>Pago</th>
				<th>Entrega</th>
				<th>Comentarios</th>
				<th>Cantidad</th>
				<th>Plato</th>
			</tr>
			

			@foreach ($orders as $order)

					<tr>
						
						<td>{{ $order->id }}</td>
						<td>{{ $order->user->name ." ". $order->user->surname }}</td>
						<td>{{ $order->state }}</td>
						<td>{{ $order->payment }}</td>
						<td>{{ $order->delivery }}</td>
						<td>{{ $order->comments }}</td>
						<td><ul>
                @foreach ($order->dishes as $dish)
                    <ul>{{ $dish->pivot->quantity }}</ul>
                @endforeach
            </ul></td>
						<td><ul>
						@foreach ($order->dishes as $dish)
							<ul>{{ $dish->name }}</ul>
						@endforeach
        				</ul></td>
						<td>
							<form method="post" action="{{ route('dish.destroy', $order->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('dish.show', $order->id) }}" class="btn btn-primary btn-sm">Ver</a>
								<a href="{{ route('dish.edit', $order->id) }}" class="btn btn-warning btn-sm">Editar</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Eliminar" />
							</form>
							
						</td>
					</tr>

				@endforeach

			
		</table>
		
	</div>
</div>
@endsection