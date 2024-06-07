<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

Route::get('/', [CalculadoraController::class, 'index']);
Route::get('/create', [CalculadoraController::class, 'create']);
Route::post('/store', [CalculadoraController::class, 'store']);
Route::delete('/delete', [CalculadoraController::class, 'delete']);
Route::get('/edit/{id}', [CalculadoraController::class, 'edit']);
Route::put('/update', [CalculadoraController::class, 'update']);
