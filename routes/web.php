<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

// Welcome page
Route::get('/', function () {
    return view('welcome');
});

// Books routes
Route::prefix('library')->name('library.')->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('index');          
    Route::get('/author', [BookController::class, 'author'])->name('author'); 
    Route::get('/publisher', [BookController::class, 'publisher'])->name('publisher'); 
    Route::get('/{id}', [BookController::class, 'show'])->name('show');                 
});

// Author routes 
Route::prefix('authors')->name('authors.')->group(function () {
    Route::get('/', [AuthorController::class, 'index'])->name('index');        
    Route::get('/{id}', [AuthorController::class, 'show'])->name('show');      
});

// Publisher routes 
Route::prefix('publisher')->name('publisher.')->group(function () {
    Route::get('/', [AuthorController::class, 'index'])->name('index');        
    Route::get('/{id}', [AuthorController::class, 'show'])->name('show');      
});
