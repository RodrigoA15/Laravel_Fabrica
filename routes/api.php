<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\restauranteController;
use App\Http\Controllers\reservaController;



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

//
Route::post('/almacenar_usuario', [usuarioController::class, 'store']);
Route::get('/lista_usuario', [usuarioController::class, 'index']);
//
Route::post('/almacenar_restaurante', [restauranteController::class, 'store']);
Route::get('/lista_restaurante', [restauranteController::class, 'index']);
//
Route::post('/almacenar_reserva', [reservaController::class, 'store']);





