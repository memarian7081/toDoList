<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('index');

Route::prefix('/login')->group(function () {
    Route::get('/', [LoginController::class, 'create'])->name('register.create');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

});
Route::prefix('user')->group(function () {
    Route::post('/', [LoginController::class, 'register'])->name('register');
    Route::get('/login', [LoginController::class, 'login'])->name('login.login');
    Route::post('/login', [LoginController::class, 'loginUser'])->name('login.user');
    Route::get('/list', [LoginController::class, 'listUser'])->name('login.list');
    Route::delete('/delete/{id}', [LoginController::class, 'destroy'])->name('delete');
});


Route::fallback(function () {
    return view('wrongRoute.errors');
});
