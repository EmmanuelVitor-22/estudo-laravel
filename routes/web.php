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

//essa é uma rota de visualização
Route::get('/', function () {
    return view('welcome');
    // Criar rota nomeada
});

//roteamento com parametro
Route::get('/users/{id?}', function ($id=null) {

    return  'User '.$id;
    // Criar rota nomeada
    //    validando parametros
})->name('usuario');
