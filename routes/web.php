<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {return view('landingPage');});
Route::get('/user/login', function () {return view('user.login');});
Route::post('/',[UserController::class,'login']);
Route::get('/user/signup', [UserController::class,'create']);
Route::get('/success', function () {return view('user.success');});
Route::post('/success', [UserController::class,'store']);
Route::get('/user/{user}', [UserController::class, 'show']);