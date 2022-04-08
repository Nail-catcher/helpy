<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    Auth::logout();
    return view('welcome');
})->name('welcome');
Route::get('/simpleanalyzes', [\App\Http\Controllers\WebAnalyzeController::class, 'index']);
Route::get('/welcomephone', [\App\Http\Controllers\WelcomePhoneController::class, 'index']);
Route::get('/welcomephone/enter', [\App\Http\Controllers\WelcomePhoneController::class, 'enter']);
Route::post('/welcomephone', [\App\Http\Controllers\WelcomePhoneController::class, 'auth'])->name('getcode');
Route::post('/getuser', [\App\Http\Controllers\WelcomePhoneController::class, 'getuser'])->name('getUser');

Auth::routes();
Route::middleware(['auth:web', 'verified'])->group(function () {
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);



    Route::resource('/profile', \App\Http\Controllers\Web\UserController::class);
    Route::get('/analyzes', [App\Http\Controllers\AnalyzeController::class, 'huindex']);
    Route::post('/updateAnal', [App\Http\Controllers\AnalyzeController::class, 'updateAnal']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
