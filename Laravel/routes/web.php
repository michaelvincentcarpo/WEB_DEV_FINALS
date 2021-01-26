<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\HomeController;
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

Route::get('/Test', function () {
    return view('Test');
});

/*
Route::get('/index', function () {
    return view('index');
});*/
Route::get('/Test',[MyController::class,'Test'] );
/*Route::get('/index',[MyController::class,'index'] );*/
Route::get('/generic',[MyController::class,'generic'] );
Route::get('/elements',[MyController::class,'elements'] );

Route::get('/signup',[MyController::class,'index'] );
Route::post('/signup',[MyController::class,'submit'] );

//exam//
/*
//app.blade.php
Route::get('/index',[MyController::class,'app']);

//route for display data
Route::post('/index',[MyController::class,'displayData']);
*/
