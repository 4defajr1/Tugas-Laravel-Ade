<?php

use App\Http\Controllers\productsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;


Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/home', function () {
    return view('home');
});
// Route::get('/about', function () {
//     return view('about');
// });

// route::get('/products', [productsController::class, 'index']);

// Route::get('/home', [PageController::class, 'home']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/home', [TestController::class, 'home']);
// Route::get('/about', [TestController::class, 'about']);

// buat data
Route::get('/products/create', [productsController::class, 'create'])->name('products.create');
Route::post('/products/store', [productsController::class, 'store'])->name('products.store');
Route::post('/products', [productsController::class, 'store'])->name('products.store');  

// read data
Route::get('/products', [productsController::class, 'index'])->name('products.index');

// edit data / update data
Route::get('/products/{id}/edit', [productsController::class, 'edit'])->name('products.edit');
Route::post('/products/{id}/edit', [productsController::class, 'edit'])->name('products.edit');
// Route::get('/products/edit/{id}', [productsController::class, 'update'])->name('products.edit');  
// Route::post('/products/update/{id}', [productsController::class, 'update'])->name('products.update');
Route::put('/products/{id}', [productsController::class, 'update'])->name('products.update');

// delete data
Route::post('/products/{id}', [productsController::class, 'destroy'])->name('products.destroy');
Route::delete('/products/{id}', [productsController::class, 'destroy'])->name('products.destroy');