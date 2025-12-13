<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('books.index');

Route::prefix('books')->controller(BookController::class)->group(function() {
    Route::get('/create', 'create')->name('books.create');
    Route::get('/show/{id}', 'show')->name('books.show');
    Route::get('/edit/{id}', 'edit')->name('books.edit');
    Route::post('/store', 'store')->name('books.store');
    Route::put('/update/{id}', 'update')->name('books.update');
    Route::delete('/delete/{id}', 'destroy')->name('books.delete');
});

Route::prefix('authors')->controller(AuthorController::class)->group(function() {
    Route::get('/', 'index')->name('authors.index');
    Route::get('/create', 'create')->name('authors.create');
    Route::get('/show/{id}', 'show')->name('authors.show');
    Route::get('/edit/{id}', 'edit')->name('authors.edit');
    Route::post('/store', 'store')->name('authors.store');
    Route::put('/update/{id}', 'update')->name('authors.update');
    Route::delete('/delete/{id}', 'destroy')->name('authors.delete');
});

Route::prefix('categories')->controller(BookCategoryController::class)->group(function() {
    Route::get('/', 'index')->name('categories.index');
    Route::get('/create', 'create')->name('categories.create');
    Route::get('/show/{id}', 'show')->name('categories.show');
    Route::get('/edit/{id}', 'edit')->name('categories.edit');
    Route::post('/store', 'store')->name('categories.store');
    Route::put('/update/{id}', 'update')->name('categories.update');
    Route::delete('/delete/{id}', 'destroy')->name('categories.delete');
});
