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
// para criar uma rota que responda a vários verbos HTTP.
//Route::match(['get', 'post'],'users', function () {
//    return view('welcome');
//});

//middleware isolado para cada rota
Route::get('/', function () {
    return view('welcome');

})->middleware('signed');

//middleware dentro de um grupo
Route::middleware('signed')->group(function (){

    Route::get('{id?}', function ($id=null) {
        return  'User '.$id;
    })->name('usuario')->whereNumber('id');

});
