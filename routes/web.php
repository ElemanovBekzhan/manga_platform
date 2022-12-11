<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('/login', [MainController::class, 'login'])->name('auth.login');
    Route::post('/login', [MainController::class, 'authorization'])->name('auth.login');
    Route::get('/register', [MainController::class, 'register'])->name('auth.register');
    Route::post('/register', [MainController::class, 'registration'])->name('auth.register');
});


Route::middleware('auth')->group(function (){
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/profile', [MainController::class, 'index'])->name('profile');
    Route::get('/logout', [MainController::class, 'logout'])->name('auth.logout');

});
