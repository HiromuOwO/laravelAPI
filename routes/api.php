<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nudiController;

Route::get('/nudis', [nudiController::class, 'index']);

Route::get('/nudis/{id}', [nudiController::class, 'show']);


Route::post('/nudis',[nudiController::class, 'store']);

Route::put('/nudis/{id}', function (){
    return 'Actualizando nudibranquio';
});

Route::delete('/nudis/{id}', [nudiController::class, 'destroy']);