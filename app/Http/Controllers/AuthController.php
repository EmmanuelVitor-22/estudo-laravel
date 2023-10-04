<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function store (Request $request){
//        valdação
        $request->validate([
            'email'=> 'required|email',
            'password' => 'required'
        ]);
        return view('auth.login');
    }
}
