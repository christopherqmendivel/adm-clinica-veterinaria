<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClinicaController;


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

// Ruta para obtener los empleados
Route::get('/empleados', [EmpleadoController::class, 'index']);


//RUTA CLINICA

Route::get('/clinicas', [ClinicaController::class, 'index']);
Route::post('/clinicas', [ClinicaController::class, 'store']);
Route::get('/clinicas/{clinica}', [ClinicaController::class, 'show']);
Route::put('/clinicas/{clinica}', [ClinicaController::class, 'update']);
Route::delete('/clinicas/{clinica}', [ClinicaController::class, 'destroy']);

