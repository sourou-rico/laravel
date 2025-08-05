<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.master');
// });
// Route::get('/contact-us', function () {
//     return view('layouts.contact');
// });

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
Route::get('/', [PagesController::class, 'index']);
Route::get('/contact-us', [PagesController::class, 'contact']);
Route::get('/about', [PagesController::class, 'about']);
// Route::get('/article', [ArticlesController::class, 'index']);
Route::get('/article/{article}', [ArticlesController::class, 'show']);
 Route::get('/articles', [ArticlesController::class, 'index']);
// Route::get('/article/{id}', [ArticlesController::class, 'show']);
Route::get('/articles/create', [ArticlesController::class, 'create'])->name('articles.create');

Route::post('/articles/create', [ArticlesController::class, 'store']);
