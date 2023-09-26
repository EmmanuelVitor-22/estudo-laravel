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

//checagem se tem aquele valor

//    if($request->has('token')){
//        dd("existe token");
//    }
//
//    if($request->has(['token', 'curso'])){
////        isso corresponde a :  if($request->has('token') && $request->has(' curso') ){
//        dd("existe token e curso");
//    }
//    $request->whenHas('curso', function ($input) {
//        dd("Faça algo");
//    });

//    if ($request->hasAny(['token', 'curso'])) {
//        dd("Se não ta preenchido ele cai aqui");
//    }
//
//
//    $request->whenFilled('curso', function ($input) {
//        dd("O mesmo q fazer validação com empity . É para caso seja vazio");
//    });

    if ($request->missing('token')) {

        dd("O mesmo q fazer validação isset. É para ver se está setado");
    }

});

/**/
