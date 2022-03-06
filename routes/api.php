<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

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


Route::get('/contato/', [ContatoController::class, 'list']);
Route::post('/contato/create', [ContatoController::class, 'create']);
Route::get('/contato/{id}', [ContatoController::class, 'select']);
Route::put('/contato/{id}', [ContatoController::class, 'update']);
Route::delete('/contato/{id}', [ContatoController::class, 'delete']);
