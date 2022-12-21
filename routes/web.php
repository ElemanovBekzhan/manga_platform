<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\PhotoController;
use App\Models\Photo;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('/login', [MainController::class, 'login'])->name('auth.login');
    Route::post('/login', [MainController::class, 'authorization'])->name('auth.login');
    Route::get('/register', [MainController::class, 'register'])->name('auth.register');
    Route::post('/register', [MainController::class, 'registration'])->name('auth.register');
});


Route::middleware('auth')->group(function (){
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/read', [MainController::class, 'read'])->name('read');
    Route::get('/profile', [MainController::class, 'index2'])->name('profile');
    Route::get('/logout', [MainController::class, 'logout'])->name('auth.logout');
    Route::get('/catalog', [MainController::class, 'catalog'])->name('catalog');
    Route::get('/genre', [GenreController::class, 'create'])->name('genre_load');
    Route::post('/genre',[GenreController::class, 'genres'])->name('genre');


    Route::prefix('/mangas')->name('mangas.')->group(function (){
        Route::get('/upload', [MangaController::class, 'create'])->name('create');
        Route::post('/upload', [MangaController::class, 'store'])->name('upload');
    });
});

