<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClinteController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\CargoController;

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

Route::put('/tipousuarios/update/id', [ClinteController::class, 'update']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pepito', function () {
    return view('otra');
});
// Route::get('/api/cargos/datos', [CargoController::class, 'getData']);
