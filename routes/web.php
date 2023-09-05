<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DishController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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





