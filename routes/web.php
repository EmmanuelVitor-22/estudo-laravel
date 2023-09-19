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

// Criar rota nomeada
Route::get('/users', function () {
    return view('welcome');
})->name('usuario');

// redirecionamento de rotas
Route::get('users2', function (){
    return 'Hello World';
})->name('segunda');
//forma simples
//Route::get('users2', function (){
//    //LOGICA
//    return 'Hello World1';
//})->name('segunda');
//Route::redirect('users', 'users2', 301);
//Route::permanentRedirect('users', 'users2');

//forma com logica 
Route::get('users1', function (){
    //apnas redirecionando usando a rota em si
    //return redirect( 'users2');

//    REDIRECIONANDO CHAMANDO O NOMEADO
    return redirect()->route("segunda");
});
