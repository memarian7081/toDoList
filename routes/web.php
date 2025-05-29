<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('index');

Route::prefix('/login')->group(function () {
    Route::get('/', [LoginController::class, 'create'])->name('login.create'); // صفحه ورود
    Route::post('/', [LoginController::class, 'register'])->name('register'); // ثبت‌نام
    Route::get('/login1', [LoginController::class, 'login'])->name('login.login'); // صفحه ورود (دیگر)
    Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post'); // ارسال اطلاعات ورود
    Route::get('/list', [LoginController::class, 'listUser'])->name('login.list'); // لیست کاربران
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); // خروج
    Route::delete('/delete/{id}', [LoginController::class, 'destroy'])->name('delete'); // حذف کاربر
    Route::get('trashedUser', [LoginController::class, 'trashedUser'])->name('trashedUser'); // کاربران حذف شده
    Route::get('restoreUser/{id}', [LoginController::class, 'restore'])->name('restoreUser'); // بازیابی کاربر
});

Route::get('/login1', function () {
    return view('index');
});
