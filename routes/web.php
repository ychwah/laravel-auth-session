<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthenticatedMidddleware;
/*Route::get('/', [BookController::class, 'index']);
Route::get('/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store'])->name('create');
*/
Route::get('/login', [AuthController::class, 'view_login'])->name('view.login');
Route::get('/register', [AuthController::class, 'view_register'])->name('view.register');
Route::get('/students', [AuthController::class, 'view_students'])->name('view.students')->middleware(AuthenticatedMidddleware::class);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');