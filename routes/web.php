<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\ViewAllController;
use App\Http\Controllers\ProfileController;


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


Route::get('/test', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


