@extends('order.master')

@section('content')

<div class="card">
	<div class="card-header">Edit Dish</div>
	<div class="card-body">
		<form method="post" action="{{ route('dish.update', $dish->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Dish Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" value="{{ $dish->name }}" />
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
					<input type="file" name="image" />
					<br />
					<img src="{{ asset('images/' . $dish->image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_image" value="{{ $dish->image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $dish->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
