<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('blog_category', BlogCategoryController::class);
Route::resource('posts',PostController::class);
