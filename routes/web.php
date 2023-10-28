<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::get('/', [MoviesController::class, 'index']);
Route::get('/movies/{movie}', [MoviesController::class, 'show']);
