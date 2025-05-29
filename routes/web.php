<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('index');

Route::prefix('/login')->group(function () {
    Route::get('/', [LoginController::class, 'create'])->name('login.create');
    Route::post('/', [LoginController::class, 'register'])->name('register');
    Route::get('/login1', [LoginController::class, 'login'])->name('login.login');
    Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');
    Route::get('/list', [LoginController::class, 'listUser'])->name('login.list');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::delete('/delete/{id}', [LoginController::class, 'destroy'])->name('delete');
    Route::get('trashedUser', [LoginController::class, 'trashedUser'])->name('trashedUser');
    Route::get('restoreUser/{id}', [LoginController::class, 'restore'])->name('restoreUser');
    Route::get('edit/{id}', [LoginController::class, 'edit'])->name('editUser');;
    Route::put('update/{id}', [LoginController::class, 'update'])->name('updateUser');
});

Route::fallback(function () {
    return view('wrongRoute.errors');
});
