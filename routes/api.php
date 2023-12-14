<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\OperadorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/operadores',[OperadorController::class,'index']);
Route::get('/operadores/{id}', [OperadorController::class, 'show']);
Route::post('/operadores',[OperadorController::class,'store']);
Route::put('/operadores/{id}',[OperadorController::class,'update']);
Route::delete('/operadores/{id}',[OperadorController::class,'destroy']);
Route::get('/equipos',[EquipoController::class,'index']);
Route::get('/quipos/{id}', [EquipoController::class, 'show']);
Route::post('/equipos',[EquipoController::class,'store']);
Route::put('/equipos/{id}',[EquipoController::class,'update']);
Route::delete('/equipos/{id}',[EquipoController::class,'destroy']);
