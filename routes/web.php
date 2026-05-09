<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;

Route::get('/', fn() => redirect('/login'));

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Student
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/dashboard', [StudentController::class, 'dashboard']);
    Route::get('/form', [StudentController::class, 'form']);
    Route::post('/form', [StudentController::class, 'store']);
    Route::get('/seleksi', [StudentController::class, 'seleksi']);
});

// Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard']);
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
    Route::post('/admin/update/{id}', [AdminController::class, 'update']);
    Route::post('/admin/delete/{id}', [AdminController::class, 'destroy']);
});