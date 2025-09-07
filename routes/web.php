<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
// Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
// Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');
// Route::get('/customer/{customer}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
// Route::put('/customer/{customer}', [CustomerController::class, 'update'])->name('customer.update');
// Route::get('/customer/{customer}', [CustomerController::class, 'show'])->name('customer.show');
// Route::delete('/customer/{customer}', [CustomerController::class, 'destroy'])->name('customer.destroy');

Route::resource('customer', CustomerController::class);

// php artisan route:list
