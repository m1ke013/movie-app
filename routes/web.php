<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;


Route::get('/', [MoviesController::class, 'index'])->name('index');

Route::get('/genre', function () {
    return view('genre');
});

Route::get('/country', function () {
    return view('country');
});

Route::get('/movies', function () {
    return view('watch.watching');

});

Route::get('/tv-series', function () {
    return view('tv_series');

});

Route::get('/top-imdp', function () {
    return view('top_imdb');

});

