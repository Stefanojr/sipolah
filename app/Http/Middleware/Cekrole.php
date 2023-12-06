<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use symfony\component\HttpFoundation\Response;

class Cekrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( Request $request, Closure $next, string $role)
    {
        if (auth()->user()->role == $role) {
            return $next($request);
        }
        return redirect()->back();

    }
}
