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


//Injeção de dependencia (injetando dependencia da classe request_
Route::get('/', function () {
    return view('welcome');

});


Route::resource('users', \App\Http\Controllers\UserController::class)->only('index');
Route::get('checkout/{token}', \App\Http\Controllers\CheckOutController::class);
