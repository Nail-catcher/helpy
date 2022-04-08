<?php

use Illuminate\Http\Request;
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
Route::get('/lk', \App\Http\Controllers\UserController::class);

Route::post('/updateUser', [\App\Http\Controllers\UserController::class, 'updateUser']);

Route::get('/simpleanalyzes', [\App\Http\Controllers\AnalyzeController::class,'simple_index']);
Route::resource('/analyzes', \App\Http\Controllers\AnalyzeController::class);

Route::get('/nameanal', \App\Http\Controllers\NamingAnalyzeController::class);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
