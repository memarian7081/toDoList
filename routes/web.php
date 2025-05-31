<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('index');

Route::prefix('/login')->group(function () {
    Route::get('/', [LoginController::class, 'create'])->name('login.create');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('trashedUser', [LoginController::class, 'trashedUser'])->name('trashedUser');
    Route::get('restoreUser/{id}', [LoginController::class, 'restore'])->name('restoreUser');
    Route::get('edit/{id}', [LoginController::class, 'edit'])->name('editUser');;
    Route::put('update/{id}', [LoginController::class, 'update'])->name('updateUser');
    Route::delete('forceDelete/{id}', [LoginController::class, 'forceDelete'])->name('forceDelete');
});
Route::prefix('user')->group(function () {
    Route::post('/', [LoginController::class, 'register'])->name('register');
    Route::get('/login', [LoginController::class, 'login'])->name('login.login');
    Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');
    Route::get('/list', [LoginController::class, 'listUser'])->name('login.list');
    Route::delete('/delete/{id}', [LoginController::class, 'destroy'])->name('delete');
});
Route::prefix('/tasks')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/create', [TaskController::class, 'store'])->name('tasks.store');
    Route::delete('/destroy/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('/update/{id}', [TaskController::class, 'update'])->name('tasks.update');
});

Route::fallback(function () {
    return view('wrongRoute.errors');
});
