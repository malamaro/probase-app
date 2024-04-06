<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::get('/api/deposit', [TransactionController::class, 'create']);
