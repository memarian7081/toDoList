<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('index');

Route::prefix('/login')->group(function () {
    Route::get('/', [LoginController::class, 'create'])->name('register.create');
    Route::get('/login', [LoginController::class, 'login'])->name('login.login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

});
Route::prefix('user')->group(function () {
    Route::post('/', [UserController::class, 'register'])->name('register');
    Route::post('/login', [UserController::class, 'loginUser'])->name('login.user');
    Route::get('/list', [UserController::class, 'listUser'])->name('user.list');
    Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
});


Route::fallback(function () {
    return view('wrongRoute.errors');
});
