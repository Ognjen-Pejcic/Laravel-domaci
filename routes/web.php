<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlucajsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard', [SlucajsController::class, 'indexx'])->name('dashboard');

    Route::get('/task',[TasksController::class, 'add']);
    Route::post('/task',[SlucajController::class, 'create']);

    Route::get('/task{task}',[TasksController::class, 'edit']);
    Route::post('/task{task}',[TasksController::class, 'update']);

    Route::get('/slucajj', function () {

        $slucaj = DB::table('slucajs')->get();
    
        return view('dashboard', ['slucaj' => $slucaj]);
    });


    Route::get('dashboard',[SlucajsController::class, 'indexx'])->name('dashboard');

    Route::get('unos',[SlucajsController::class, 'dodaj'])->name('dashboard');

    Route::get('/greeting', function () {
        return 'Hello World';
    });

    Route::post('unos',[SlucajsController::class, 'store'] );

});
