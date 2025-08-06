<?php

use App\Http\Controllers\BairrosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CondominiosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SendContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/condominios', [CondominiosController::class, 'index']);
Route::get('/bairros', [BairrosController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

Route::post('/sendEmail', [SendContactController::class, 'sendContact']);