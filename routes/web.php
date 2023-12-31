<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderController;


Route::resource('dish', DishController::class);
Route::resource('order', OrderController::class);

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/orders', [AdminController::class, 'adminOrders'])->name('admin.orders');
    Route::get('/admin/menu', [AdminController::class, 'adminMenu'])->name('admin.menu');
    Route::get('/admin/index', [AdminController::class, 'adminIndex'])->name('admin.index');
    Route::get('/admin/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
    Route::post('/admin/profile/update', [AdminController::class, 'adminProfileUpdate'])->name('admin.profile.update');
    Route::get('/admin/password/change', [AdminController::class, 'adminPasswordChange'])->name('admin.password.change');
    Route::post('/admin/password/update', [AdminController::class, 'adminPasswordUpdate'])->name('admin.password.update');

    Route::get('/admin/stats', [AdminController::class, 'adminStats'])->name('admin.stats');
    Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');

});

Route::get('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');


?>