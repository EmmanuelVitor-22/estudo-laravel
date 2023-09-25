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


//ENTENDENDO REQUEST: ACESSANDO DADOS DO INPUT
Route::get('/user', function (Request $request) {

//    dd($request->input('token')); //laravel print o valor da chave passada

//    dd($request->input('token', 'Laravel'));
    /*caso o valor da chave passada não exista, você pode passar um valor padrao para ela;
    para que não retorn null */


// dd($request->input('product.curso')); //pode pegar dads vindo de um array
//    dd($request->input()); // input sem parametro ele captura todos dados que exitem, incluindo query, inputs do POST


//    dd($request->query('product')); // acessa a query diretamente
//    dd($request->query('token', 'Laravel')); /*caso o valor da chave passada não exista, você pode passar um valor padrao para ela;
//    para que não retorn null */

//    dd($request->query()); //sem parametro ele captura todos dados que exitem

//    dd($request->token); // acessa diretamente
//    dd($request->only('token')); // traz apenas os inputs que forem definidas (podem ter mais de um, separados por virgula)
//    dd($request->except()); // traz todos os inputs exceto os que forem definidas (podem ter mais de um, separados por virgula)

});

/**/
