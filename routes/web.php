<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'movies');

Route::get('/movies/search', [MovieController::class, 'search'])->name('movies.search');
Route::post('/movies/search', [MovieController::class, 'processSearch'])->name('movies.process.search');


Route::resource('movies', MovieController::class);