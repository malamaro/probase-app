<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AccountController;

Route::get('/api/balance/{id}', [AccountController::class, 'balance']);
