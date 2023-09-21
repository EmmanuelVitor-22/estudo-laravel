<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if($role === 'admin'){
            dd("é ADM");
        }elseif ($role === 'editor') {
            dd('é editor');
        }

//        if ($request->input('token') !== '123'){
//            return redirect('/');
//        }
        return $next($request);
    }
}
