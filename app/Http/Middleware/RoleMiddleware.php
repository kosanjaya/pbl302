<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $role = $request->user()->role;
        // dd($role);
        if(in_array($role,$roles)){
            return $next($request);
        }

        // if($request->user()->role === 'admin'){
        //     return $next($request);
        // }

        return abort('404');
    }
}
