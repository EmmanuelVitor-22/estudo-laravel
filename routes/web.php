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
Route::get('/', function (\Illuminate\Http\Request $request) {
    return view('welcome');

});
Route::get('user', function () {
dd("Fui");
});

