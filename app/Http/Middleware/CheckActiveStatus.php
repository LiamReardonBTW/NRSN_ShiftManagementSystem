<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckActiveStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->active_status == '0')
        {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('inactiveAccLogout');
        }
        else
        {
            return $next($request);
        }
    return $next($request);
    }
}
