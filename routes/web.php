<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/test', function () {
    return view('test');
});

// 2. create a route with controller as we follow mvc pattern as per documentation 
Route::get('/create-item', [PostController::class, 'create']);

// 4.2 create the store route with post method
Route::post('/store-item', [PostController::class, 'storeData'])->name('store-item');
