<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/index',"App\Http\Controllers\StudentController@index") ;
Route::get('/edit/{id}',"App\Http\Controllers\StudentController@edit") ;
Route::get('/show/{id}',"App\Http\Controllers\StudentController@show") ;
Route::get('/create',"App\Http\Controllers\StudentController@create") ;
Route::post('/store',"App\Http\Controllers\StudentController@store") ;
Route::post('/update/{id}',"App\Http\Controllers\StudentController@update") ;
Route::get('/',function(){
    return view(view: 'login');
});
Route::get('register',function(){
    return view(view: 'register');
});

Route::post("/register-user",[StudentController::class,'registerUser'])->name("registered");

Route::post('/login-user',[StudentController::class,'loginUser'])->name('login-user');

Route::get('/logout',[StudentController::class,'logout']);
