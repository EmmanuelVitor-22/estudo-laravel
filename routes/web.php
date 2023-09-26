<?php

use Illuminate\Http\Request;
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


//ENTENDENDO REQUEST: CHECANDO OS INPUTS
Route::get('/user', function (Request $request) {
//return \Illuminate\Support\Facades\View::make('welcome'); //o mesmo q o formato de baixo, mas tem algumas funcionalidades
return view('welcome');
});

/**/
