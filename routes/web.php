<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/7', function () {
    return view('index');
});
Route::get('/',[LoginController::class,'index'])->name('index');
Route::prefix('/login')->group(function(){
    Route::get('/',[LoginController::class,'create'])->name('login.create');
    Route::post('/',[LoginController::class,'register'])->name('register');
    Route::get('/login',[LoginController::class,'login'])->name('login.login');
    Route::post('/login',[LoginController::class,'loginPost'])->name('login.post');
});
