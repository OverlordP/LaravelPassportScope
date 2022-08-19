<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EjemploController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::post('registro',[AuthController::class,'registro']);
Route::post('acceso',[AuthController::class,'acceso']);

Route::get('ejemplo',[EjemploController::class,'ejemplo'])->middleware('auth:api','scopes:solo-ps');