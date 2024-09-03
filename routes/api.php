<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CargoController;

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

Route::get('/cargos/datos', [CargoController::class, 'getData']);
Route::post('/cargos/save', [CargoController::class, 'save']);
Route::put('/cargos/update', [CargoController::class, 'update']);
Route::delete('/cargos/delete', [CargoController::class, 'delete']);

Route::get('/areas/datos', [CargoController::class, 'getData']);
Route::post('/areas/save', [CargoController::class, 'save']);
Route::put('/areas/update', [CargoController::class, 'update']);
Route::delete('/areas/delete', [CargoController::class, 'delete']);

Route::get('/tipousuarios/datos', [CargoController::class, 'getData']);
Route::post('/tipousuarios/save', [CargoController::class, 'save']);
Route::put('/tipousuarios/update', [CargoController::class, 'update']);
Route::delete('/tipousuarios/delete', [CargoController::class, 'delete']);

Route::get('/proveedors/datos', [CargoController::class, 'getData']);
Route::post('/proveedors/save', [CargoController::class, 'save']);
Route::put('/proveedors/update', [CargoController::class, 'update']);
Route::delete('/proveedors/delete', [CargoController::class, 'delete']);

Route::get('/productos/datos', [CargoController::class, 'getData']);
Route::post('/productos/save', [CargoController::class, 'save']);
Route::put('/productos/update', [CargoController::class, 'update']);
Route::delete('/productos/delete', [CargoController::class, 'delete']);

Route::get('/clases/datos', [CargoController::class, 'getData']);
Route::post('/clases/save', [CargoController::class, 'save']);
Route::put('/clases/update', [CargoController::class, 'update']);
Route::delete('/clases/delete', [CargoController::class, 'delete']);

Route::get('/productoeventos/datos', [CargoController::class, 'getData']);
Route::post('/productoeventos/save', [CargoController::class, 'save']);
Route::put('/productoeventos/update', [CargoController::class, 'update']);
Route::delete('/productoeventos/delete', [CargoController::class, 'delete']);

Route::get('/claseeventos/datos', [CargoController::class, 'getData']);
Route::post('/claseeventos/save', [CargoController::class, 'save']);
Route::put('/claseeventos/update', [CargoController::class, 'update']);
Route::delete('/claseeventos/delete', [CargoController::class, 'delete']);

Route::get('/clientes/datos', [CargoController::class, 'getData']);
Route::post('/clientes/save', [CargoController::class, 'save']);
Route::put('/clientes/update', [CargoController::class, 'update']);
Route::delete('/clientes/delete', [CargoController::class, 'delete']);
//También se puede agrupar y se corta un poco el codigo, pero ambos son funcionales

// Route::cotroller(AutoController::class)->group(function () {
    // Route::get('/clases/datos','getData');
    // Route::post('/clases/save','save');
    // Route::put('/clases/update','update');
    // Route::delete('/clases/delete','delete');
    

//     Route::post('login', 'login');
//     Route::post('register', 'register');
//     Route::post('logout', 'logout');
//     Route::post('refresh', 'refresh');
//     Route::post('me', 'me');
// });