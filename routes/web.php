<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

// Route::get('/home', [PageController::class, 'home']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/home', [TestController::class, 'home']);
// Route::get('/about', [TestController::class, 'about']);