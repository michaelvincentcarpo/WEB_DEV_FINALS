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
//default//get
Route::get('/', function () {
    return view('welcome');
});

//Mainpage//
Route::get('/HomePage',[MyController::class,'HomePage'] );
Route::get('/About',[MyController::class,'About'] );
//Form page/
Route::get('/Form',[MyController::class,'Form'] );
Route::post('/Form',[MyController::class,'insertdata'] );
//admin page//
Route::get('/Admin',[MyController::class,'admin'] );
Route::post('/Admin',[MyController::class,'search'] );
Route::post('/search',[MyController::class,'Update'] );

//login/regester//
Route::get('/Login_Register',[MyController::class,'Login_Register'] );
Route::post('/Login_Register',[MyController::class,'insertacc'] );

//example

//route for retrieving record
Route::get('/home',[HomeController::class,'home']);

Route::get('/Admin_v2',[HomeController::class,'Admin_v2']);

//route for inserting record
Route::post('/home',[HomeController::class,'insertData']);


Route::get('/Update_v2/{id}',[HomeController::class,'editData']);

//route for updating Data
Route::post('/Update_v2/{id}',[HomeController::class,'updateData']);