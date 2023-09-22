<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        dd("Index controller");

    }

//    injetando referencia
    public function findAll(Request $request, $id)
    {
        dd($request->query(),$id);

    }
}
