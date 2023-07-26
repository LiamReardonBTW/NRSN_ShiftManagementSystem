<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ManagerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check())
        {
            // 1 - Admin & 2 - Manager & 3 - Worker
            if(Auth::user()->role_as == '1' || Auth::user()->role_as == '2') //Admins bypass manager middleware
            {
                return $next($request);
            }
            else if(Auth::user()->role_as == '3')
            {
                return redirect('/dashboard')->with('status', 'Access rejected as you are not a manager.');
            }
        }
    }
}
