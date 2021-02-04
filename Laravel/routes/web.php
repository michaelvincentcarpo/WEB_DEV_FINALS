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
Route::get('/Admin',[MyController::class,'Admin'] );

Route::get('/Admin_v2',[MyController::class,'Admin_v2'] );
Route::get('/Update',[MyController::class,'Update'] );

//login/regester//
Route::get('/Login_Register',[MyController::class,'Login_Register'] );
Route::post('/Login_Register',[MyController::class,'insertacc'] );

//route for delete record
Route::get('/delete/{id}',[HomeController::class,'deleteData']);

//route for editing data
Route::get('/edit/{id}',[HomeController::class,'editData']);

//route for updating Data
Route::post('/edit/{id}',[HomeController::class,'updateData']);
