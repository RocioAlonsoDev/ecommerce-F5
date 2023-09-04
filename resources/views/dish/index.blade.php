@extends('dish.master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Dish Info</b></div>
			<div class="col col-md-6">
				<a href="{{ route('dish.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Price</th>
				<th>Description</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td><img src="{{ asset('images/' . $row->dish_image) }}" width="75" /></td>
						<td>{{ $row->dish_name }}</td>
						<td>{{ $row->price }}</td>
						<td>{{ $row->description }}</td>
						<td>
							<form method="post" action="{{ route('dish.destroy', $row->dish_id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('dish.show', $row->dish_id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('dish.edit', $row->dish_id) }}" class="btn btn-warning btn-sm">Edit</a>
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
		{!! $data->links() !!}
	</div>
</div>

@endsection