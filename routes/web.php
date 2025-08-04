<?php

use App\Http\Controllers\CondominiosController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/condominios', [CondominiosController::class, 'index']);
