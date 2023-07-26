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

    }
}
