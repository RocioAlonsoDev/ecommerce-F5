<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DishController;


Route::resource('dish', DishController::class);

Route::resource('order', OrderController::class);

?>