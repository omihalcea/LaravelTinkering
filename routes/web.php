<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\VideogamesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('films', FilmController::class);
Route::get('/films/create', [FilmController::class, 'create'])->name('films.create');
Route::get('/films/edit/{id}', [FilmController::class, 'edit'])->name('films.edit');
Route::put('/films/{id}', [FilmController::class, 'update'])->name('films.update');

Route::resource('videogames', VideogamesController::class);
Route::get('/videogames/create', [VideogamesController::class, 'create'])->name('videogames.create');
Route::get('/videogames/edit/{id}', [VideogamesController::class, 'edit'])->name('videogames.edit');
Route::put('/videogames/{id}', [VideogamesController::class, 'update'])->name('videogames.update');
