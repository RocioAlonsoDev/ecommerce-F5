@extends('order.master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>PLATOS</b></div>
			<div class="col col-md-6">
				<a href="{{ route('dish.create') }}" class="btn btn-success btn-sm float-end">Añadir</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Imagen</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Descripción</th>
				<th>Category</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td><img src="{{ asset('images/' . $row->image) }}" width="75" /></td>
						<td>{{ $row->name }}</td>
						<td>{{ $row->price }}</td>
						<td>{{ $row->description }}</td>
						<td>{{ $row->category->name }}</td>
						<td>
							<form method="post" action="{{ route('dish.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('dish.show', $row->id) }}" class="btn btn-primary btn-sm">Ver</a>
								<a href="{{ route('dish.edit', $row->id) }}" class="btn btn-warning btn-sm">Editar</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Eliminar" />
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
		{!! $data->links() !!}
	</div>
</div>

@endsection