<?php

namespace App\Http\Middleware;

use Closure;
use App\Providers\RouteServiceProvider;
class Admin
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

        if(auth()->user()->role!='admin'){
            return redirect(RouteServiceProvider::HOME);   }

        return $next($request);
    }
}
