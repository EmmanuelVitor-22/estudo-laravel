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
//agrupando rotas por middleware, para q sejam aplicados globalmente apenas a essas rotas
// utilizando multiplos  middlewares
Route::middleware(['myApp'])->group(function () {
    Route::get('user', function () {
        dd("user");
    });
    Route::get('send', function () {
        dd("send");
    });
    Route::get('service', function () {
        dd("service");
    })->withoutMiddleware('userAgent');
});

Route::get('teste', function () {
    dd("teste");
})->middleware(['checkToken','userAgent']);
