@extends('dish.master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Dish</div>
	<div class="card-body">
		<form method="post" action="{{ route('dish.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Dish Name</label>
				<div class="col-sm-10">
					<input type="text" name="dish_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Price</label>
				<div class="col-sm-10">
					<input type="text" name="price" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Description</label>
				<div class="col-sm-10">
					<input type='text' name="description" class="form-control"></input>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Dish Image</label>
				<div class="col-sm-10">
					<input type="file" name="dish_image" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')