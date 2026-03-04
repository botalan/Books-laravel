<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/books/create', [BooksController::class, "create"]);
Route::post('/books', [BooksController::class, "store"]);
Route::get('/books', [BooksController::class, "index"]);
Route::get('/books/{id}', [BooksController::class, "show"]);