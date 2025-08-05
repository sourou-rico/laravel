<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Models\User;

Route::get('/', [LoginController::class,'index'])->name('home');
Route::get('admin/create', [LoginController::class, 'login'])->name('login');
Route::post('admin/create', [LoginController::class, 'register'])->name('register');
Route::get('admin/edit/{user}', [LoginController::class,'edit'])->name('edit');
Route::post('admin/edit/{id}', [LoginController::class,'update'])->name('update');
Route::get('admin/delete/{user}', [LoginController::class,'delete'])->name('delete');