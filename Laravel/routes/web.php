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

/*Route::get('/Test', function () {
    return view('Test');
});

/*
Route::get('/index', function () {
    return view('index');
});*/

Route::get('/index',[MyController::class,'index'] );
Route::get('/generic',[MyController::class,'generic'] );
Route::get('/elements',[MyController::class,'elements'] );
//exam//

Route::get('/output1/{id}/{k}', function ($id,$k) {
    $id = 1;
    $k = 0;
$text = array("Happy" , "New" , "Year");
for ($i=0; $i <= $id; $i++) { 
    echo $text[$i];
    echo " ";
        for ($x=2; $x >= $k; $x--) {
            echo $text[$x]; 
            echo " ";
        }
}
});
    

