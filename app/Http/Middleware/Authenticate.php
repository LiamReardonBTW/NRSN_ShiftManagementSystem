<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    /*
     protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
    */

    public function authenticated()
    {
        if(Auth::user()->role_as == '1') //1-Admin
        {
            return redirectTo('admin/dashboard')->with('status','Welcome to Admin Dashboard.');
        }
        else if(Auth::user()->role_as == '2')
        {
            return redirectTo('dashboard')->with('status','Log in successful.');
        }
        else if(Auth::user()->role_as == '3')
        {
            return redirectTo('dashboard')->with('status','Log in successful.');
        }
    }
}
