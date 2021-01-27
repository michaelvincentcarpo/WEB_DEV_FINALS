<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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
//default//
Route::get('/', function () {
    return view('welcome');
});

//Mainpage//
Route::get('/main',[MyController::class,'index'] );
//ViewPage//
Route::get('/display',[MyController::class,'display']);
Route::post('/display',[MyController::class,'submit'] );


