<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/films', function() {
    return view('films.index');
});

Route::resource('films', FilmController::class);

Route::post('/destroy', [FilmController::class, 'destroy'])->name('films.destroy');
