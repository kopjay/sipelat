<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
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

        //If user role
        if(Auth::check() && auth()->user()->jabatan > 1 )
        {
            return redirect('kartukendali/02');
        }

        //default redirect
        return redirect('/');

    }
}
