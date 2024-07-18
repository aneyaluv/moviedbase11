<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ActorController;

Route::get('/movies', [MovieController::class, 'getAllMovies']);
Route::get('/movies/{id}', [MovieController::class, 'getMovieById']);
Route::get('/directors/{id}', [DirectorController::class, 'getDirectorById']);
Route::get('/actors/{id}', [ActorController::class, 'getActorById']);
Route::get('/movies-with-genres', [MovieController::class, 'getMoviesWithGenres']);
Route::get('/movies-with-ratings', [MovieController::class, 'getMoviesWithRatings']);

