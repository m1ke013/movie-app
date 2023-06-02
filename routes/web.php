<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\ViewAllController;


Route::get('/', [MoviesController::class, 'index'])->name('index');

Route::get('/genre', function () {
    return view('genre');
});

Route::get('/country', function () {
    return view('country');
});

Route::get('/movie/{movie_id:id}', [WatchController:: class,'index'])->name( name: 'view');

Route::get('/movies', [ViewAllController::class, 'movies'])->name('movies');
Route::get('/tv-series', [ViewAllController::class, 'tv_series'])->name('tv-series');

// Route::get('/top-imdp', function () {
//     return view('top_imdb');
// });

