<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'index'])->name('about');
Route::get('/profile', [HomeController::class, 'index'])->name('profile');
Route::get('/likes', [HomeController::class, 'index'])->name('likes');
Route::get('/dislikes', [HomeController::class, 'index'])->name('dislikes');
Route::get('/lore', [HomeController::class, 'index'])->name('lore');
Route::get('/skills', [HomeController::class, 'index'])->name('skills');
Route::get('/quotes', [HomeController::class, 'index'])->name('quotes');
Route::get('/comments', [HomeController::class, 'index'])->name('comments');
Route::get('/gallery', [HomeController::class, 'index'])->name('gallery');
Route::get('/system', [HomeController::class, 'index'])->name('system');

Route::post('/upload-image', [UploadController::class, 'store'])->name('upload.image');

Route::fallback(function () {
    return view('errors.404');
});
