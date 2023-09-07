@extends('dish.master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Dish Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('dish.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Dish Name</b></label>
			<div class="col-sm-10">
				{{ $dish->name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Price</b></label>
			<div class="col-sm-10">
				{{ $dish->price }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Description</b></label>
			<div class="col-sm-10">
				{{ $dish->description }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Dish Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $dish->image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')