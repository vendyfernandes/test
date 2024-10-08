<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', [TestController::class, 'index'])->name('task.index');
Route::get('/task/register', [TestController::class, 'register'])->name('task.register');
Route::post('/task', [TestController::class, 'store'])->name('task.store');
Route::get('/task/login', [TestController::class, 'login'])->name('task.login');
Route::post('/task', [TestController::class, 'authenticate'])->name('task.authenticate');

Route::get('/task/dashboard', [TestController::class, 'dashboard'])->name('task.dashboard');
Route::get('/task/create', [TestController::class, 'create'])->name('task.create');
Route::post('/task', [TestController::class, 'store2'])->name('task.store2');
Route::get('/task/{task}/edit', [TestController::class, 'edit'])->name('task.edit');
Route::put('/task/{task}/update', [TestController::class, 'update'])->name('task.update');
Route::delete('/task/{task}/destroy', [TestController::class, 'destroy'])->name('task.destroy');