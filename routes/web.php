<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\OperadorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () { return view('home');});
Route::get('/operadores', [OperadorController::class, 'index'])->name('operadores.index');
Route::get('/operadores/create', [OperadorController::class, 'create'])->name('operadores.create');
Route::post('/operadores', [OperadorController::class, 'store'])->name('operadores.store');
Route::get('/operadores/{id}', [OperadorController::class, 'show'])->name('operadores.show');
Route::get('/operadores/{id}/edit', [OperadorController::class, 'edit'])->name('operadores.edit');
Route::put('/operadores/{id}', [OperadorController::class, 'update'])->name('operadores.update');
Route::delete('/operadores/{id}', [OperadorController::class, 'destroy'])->name('operadores.destroy');

Route::get('/equipos', [EquipoController::class, 'index'])->name('edquipos.index');
Route::get('/equipos/create', [EquipoController::class, 'create'])->name('edquipos.create');
Route::post('/equipos', [EquipoController::class, 'store'])->name('edquipos.store');
Route::get('/equipos/{id}', [EquipoController::class, 'show'])->name('edquipos.show');
Route::get('/equipos/{id}/edit', [EquipoController::class, 'edit'])->name('edquipos.edit');
Route::put('/equipos/{id}', [EquipoController::class, 'update'])->name('edquipos.update');
Route::delete('/equipos/{id}', [EquipoController::class, 'destroy'])->name('edquipos.destroy');
