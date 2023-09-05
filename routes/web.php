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
Route::get('/user/{user}/delete', [UserController::class, 'destroy']);
Route::post('/user/login', [UserController::class, 'logout']);
Route::get('/user/{user}/edit', [UserController::class, 'edit']);
Route::post('/user/{user}', [UserController::class, 'update']);



Route::get('/about-us', function () {
    return view('aboutus');
});
Route::get('/dish/{dish_id}', function ($dish_id) {
    return view('dish', array(
        'dish_id'=>$dish_id
    ));
})->where(array('dish_id'=>'[0-9]+'));