<?php

namespace App\Http\Middleware;

use Closure;

//Harus Ditambahkan ini agar Auth bisa dipakai
use Illuminate\Support\Facades\Auth;
//Harus Ditambahkan ini agar Auth bisa dipakai

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //
        if(Auth::user() && Auth::user()->roles == 'ADMIN'){
            return $next($request);
        }
        return redirect('/');
    }
}
