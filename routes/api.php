<?php

use app\Http\Controllers;
use App\Http\Controllers\SlucajsController;
use App\Http\Controllers\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();}


// Route::get('/slucaj', [SlucajsController::class, 'index']);

// Route::post('/slucaj', [SlucajsController::class, 'store']);

Route::resource('slucaj', SlucajsController::class);
Route::resource('user', UserController::class);