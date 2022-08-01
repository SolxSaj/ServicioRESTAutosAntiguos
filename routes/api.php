<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\CriterioEspecificoController;
use App\Http\Controllers\EvaluacionVehiculoController;
use App\Models\EvaluacionVehiculo;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::post('/usuarios', [UsuarioController::class, 'store']);
Route::put('/usuarios/{id}', [UsuarioController::class, 'update']);
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy']);

Route::get('/propietario', [PropietarioController::class, 'index']);
Route::post('/propietario', [PropietarioController::class, 'store']);
Route::put('/propietario/{id}', [PropietarioController::class, 'update']);
Route::delete('/propietario/{id}', [PropietarioController::class, 'destroy']);

Route::get('/vehiculo', [VehiculoController::class, 'index']);
Route::post('/vehiculo', [VehiculoController::class, 'store']);
Route::put('/vehiculo/{id}', [VehiculoController::class, 'update']);
Route::delete('/vehiculo/{id}', [VehiculoController::class, 'destroy']);

Route::get('/criterios/{folio}', [CriterioEspecificoController::class, 'index']);
Route::post('/criterios', [CriterioEspecificoController::class, 'store']);

Route::get('/evaluacion/{busqueda}/{parametro}', [EvaluacionVehiculoController::class, 'index']);