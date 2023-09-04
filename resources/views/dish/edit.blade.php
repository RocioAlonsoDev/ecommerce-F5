@extends('dish.master')

@section('content')

<div class="card">
	<div class="card-header">Edit Dish</div>
	<div class="card-body">
		<form method="post" action="{{ route('dish.update', $dish->dish_id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Dish Name</label>
				<div class="col-sm-10">
					<input type="text" name="dish_name" class="form-control" value="{{ $dish->dish_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Price</label>
				<div class="col-sm-10">
					<input type="text" name="price" class="form-control" value="{{ $dish->price }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Description</label>
				<div class="col-sm-10">
					<input name="description" class="form-control" value="{{ $dish->description}}"></input>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Dish Image</label>
				<div class="col-sm-10">
					<input type="file" name="dish_image" />
					<br />
					<img src="{{ asset('images/' . $dish->dish_image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_dish_image" value="{{ $dish->dish_image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_dish_id" value="{{ $dish->dish_id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
