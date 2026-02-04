<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin-dashboard');
});
Route::get('/manager', function () {
    return view('manager-dashboard');
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
