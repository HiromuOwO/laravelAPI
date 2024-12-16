<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nudiController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EspecieController;

// Rutas para la API de usuarios
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);
Route::post('/usuarios', [UsuarioController::class, 'store']);
Route::put('/usuarios/{id}', [UsuarioController::class, 'update']);
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy']);

// Rutas para la API de especies
Route::get('/nudis', [nudiController::class, 'index']);
Route::get('/nudis/{id}', [nudiController::class, 'show']);
Route::post('/nudis', [nudiController::class, 'store']);
Route::put('/nudis/{id}', [nudiController::class, 'update']);
Route::delete('/nudis/{id}', [nudiController::class, 'destroy']);
