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


//fallback é como se fosse uma rota de fuga, caso alguma rota dê problema ou não seja encontrada
//ao inves de apresentar erro, ele vai apresentar o que estiver listado na falback
Route::fallback(function () {
    return view('welcome');

});

//middleware dentro de um grupo
Route::middleware('signed')->group(function (){

    Route::get('{id?}', function ($id=null) {
        return  'User '.$id;
    })->name('usuario')->whereNumber('id');

});
