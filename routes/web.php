<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index']);

Route::get('/teste', [APIController::class, 'searchBooks']);