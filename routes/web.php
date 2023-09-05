<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DishController;

Route::get('/', function () {return view('landingPage');});
Route::get('/user/login', function () {return view('user.login');});
Route::post('/',[UserController::class,'login']);
Route::get('/user/signup', [UserController::class,'create']);
Route::get('/success', function () {return view('user.success');});
Route::post('/success', [UserController::class,'store']);
Route::get('/user/{user}', [UserController::class, 'show']);
Route::get('/user/{user}/delete', [UserController::class, 'destroy']);
Route::post('/user/login', [UserController::class, 'logout']);
Route::get('/user/{user}/edit', [UserController::class, 'edit']);
Route::post('/user/{user}', [UserController::class, 'update']);

Route::get('/about-us', function () {
    return view('aboutus');
});

Route::resource('dish', DishController::class);

Route::resource('order', OrderController::class);
?>
