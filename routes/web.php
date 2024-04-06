<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AccountController;

Route::get('/api/balance/{id}', [AccountController::class, 'balance']);

Route::get('/api/deposit', [TransactionController::class, 'deposit']);

Route::get('/api/withdraw', [TransactionController::class, 'withdraw']);

Route::get('/api/update/{id}', [TransactionController::class, 'update']);

Route::get('/api/delete/{id}', [TransactionController::class, 'delete']);

Route::get('/', [LoginController::class,'login'])->name('Login');

Route::post('/', [LoginController::class,'authenticate']);