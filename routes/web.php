<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Employee\StoreController;
use App\Http\Controllers\Employee\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/employee/store', [StoreController::class, 'index'])->name('store.index');
    Route::post('/employee/store/{id}', [StoreController::class, 'store'])->name('cart.add');
    Route::get('/employee/orders', [OrderController::class, 'index'])->name('employee.orders');
    Route::patch('/orders/{order}/products/{product}',[OrderController::class, 'updateQuantity']);
    Route::post('/orders/checkout', [OrderController::class, 'checkout'])->name('store.checkout');
});



Route::get('/employee', function () {
    return view('employee-dashboard');
});

Route::get('/finance', function () {
    return view('finance-dashboard');
});


Route::get('/employee-orders', function () {
    return view('employee-orders');

});
Route::get('/users', [AdminController::class, 'index'])->name('users.index');
Route::delete('/{user}/users', [AdminController::class, 'destroy'])->name('users.index');
require __DIR__.'/auth.php';
