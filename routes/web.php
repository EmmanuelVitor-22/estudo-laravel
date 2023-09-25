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


//ENTENDENDO REQUEST: ACESSANDO DADOS DA URL
Route::get('/user', function (Request $request) {
    // dd($request);

    //Get the current path info for the request.
    // dd($request->path());

    //Get the URL (no query string) for the request.
    // dd($request->url());

    //Get the full URL for the request (include query string).
    // dd($request->fullUrl());

    /** Get the full URL for the request with the added query string parameters.
     * traz a url com a query que ela tiver e une com o que for passado como parametro
     *
     * exemplo de uso: na pesquisa, o usuario pode usar filtro, ai o sistema reune esses filtros numa query e retorna isso na url ja mesclado
     * @param array $query
     * @return string
     */
    // dd($request->fullUrlWithQuery(['curso' => 'Teste'));

    /**
     * Determine if the current request URL and query string match a pattern.
     * @param mixed ...$patterns
     * @return bool
     */
    // dd($request->fullUrlIs('http://127.0.0.1:8000'));

    /**
     * Determine if the current request URI matches a pattern.
     *
     * @param mixed ...$patterns
     * @return bool
     */
    // dd($request->is('users/*'));

    /**
     * Determine if the route name matches a given pattern.
     * também verifica se o nome da rota é esse mesmo
     * @param  mixed  ...$patterns
     * @return bool
     */
     //dd($request->routeIs('users'));

    //Get the request method.
    // dd($request->method());

    /**
     * Checks if the request method is of specified type.
     * @param string $method Uppercase request method (GET, POST etc)
     * @return bool
     */
    // dd($request->isMethod('get'));

});

