<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
        session()->flash('status', 'You must log in to access this page.');
            return route('login');
        }
    }

    public function authenticated()
    {
        if(Auth::user()->role_as == '1') //1-Admin
        {
            return redirectTo('admin/dashboard')->with('status','Welcome to Admin Dashboard.');
        }
        else if(Auth::user()->role_as == '2')
        {
            return redirectTo('manager/dashboard')->with('status','Log in successful.');
        }
        else if(Auth::user()->role_as == '3')
        {
            return redirectTo('dashboard')->with('status','Log in successful.');
        }
    }
}
