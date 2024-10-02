<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/',[HomeController::class,'home'])->middleware(['auth', 'verified']);
Route::get('/home',[HomeController::class,'home'])->middleware(['auth', 'verified']);
Route::get('/captcha1',[HomeController::class,'captcha'])->middleware(['auth', 'verified']);
Route::post('/store_captcha_point',[HomeController::class,'store_captcha_point'])->middleware(['auth', 'verified']);
Route::get('/user_profile',[HomeController::class,'user_profile'])->middleware(['auth', 'verified']);




require __DIR__.'/auth.php';
