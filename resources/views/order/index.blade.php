@extends('order.master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Ordenes</b></div>
			<div class="col col-md-6">
				<a href="{{ route('order.create') }}" class="btn btn-success btn-sm float-end">Agregar Pedido</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Numero</th>
				<th>Estado</th>
				<th>Pago</th>
				<th>Delivery</th>
				<th>Comentarios</th>
			</tr>
			@if(($data) == true)

				@foreach($data as $row)

					<tr>
						<td>{{ $row->order_id}}</td>
						<td>{{ $row->state }}</td>
						<td>{{ $row->payment }}</td>
						<td>{{ $row->delivery }}</td>
						<td>{{ $row->comments }}</td>
						<td>
							<form method="post" action="{{ route('order.destroy', $row->order_id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('order.show', $row->order_id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('order.edit', $row->order_id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{$data}
	</div>
</div>

@endsection