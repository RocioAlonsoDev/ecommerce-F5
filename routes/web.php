<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DishController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/user/login', function () {
    return view('login');
});

Route::get('/user/signup', function () {
    return view('signup');
});

Route::get('/about-us', function () {
    return view('aboutus');
});

Route::resource('dish', DishController::class);

Route::resource('order', OrderController::class);
?>