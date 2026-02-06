<?php

use App\Http\Controllers\ProductController;
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

Route::get('/manager', function () {
    return view('manager-dashboard');
});


Route::get('/employee-orders', function () {
    return view('employee-orders');

});

Route::get('/waiting', function () {
    return view('waiting');

});

Route::get('/admin/users', [AdminController::class, 'index'])->name('users.index');
Route::put('/admin/{user}/users/refuse', [AdminController::class, 'refuse'])->name('users.refuse');
Route::put('/admin/{user}/users/accept', [AdminController::class, 'accept'])->name('users.accept');
Route::get('/admin/users/search', AdminController::class ,'search');


require __DIR__.'/auth.php';

Route::get('/admin-dashboard', [AdminController::class,'index'])->name('admindashboard.index');

Route::get('/admin-products', [ProductController::class,'products'])->name('adminproducts');

Route::delete('/product-delete/{id}', [ProductController::class,'destroy'])->name('product.destroy');

Route::post('/product-store', [ProductController::class,'store'])->name('product.store');

Route::get('/product-edit/{id}' , [ProductController::class,'edit'])->name('productedit');



Route::put('/product/{id}', [ProductController::class,'update'])->name('productupdate');


Route::get('/searchProduct/{inputvalue}', [ProductController::class,'searchProduct'] );