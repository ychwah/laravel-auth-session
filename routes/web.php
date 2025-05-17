<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use App\Http\Middleware\AuthenticatedMidddleware;

Route::get('/', [ViewController::class, 'home'])->name('view.home')->middleware(AuthenticatedMidddleware::class);
Route::get('/login', [ViewController::class, 'login'])->name('view.login')->middleware(AuthenticatedMidddleware::class);
Route::get('/register', [ViewController::class, 'register'])->name('view.register')->middleware(AuthenticatedMidddleware::class);
Route::get('/students/{action}', [ViewController::class, 'student'])->name('view.student')->middleware(AuthenticatedMidddleware::class);
Route::post('/students/{action}', [StudentController::class, 'process'])->name('view.student')->middleware(AuthenticatedMidddleware::class);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');