<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->user_type == 2) {
                return $next($request);
            }
            else{
                return redirect(route('home'));
            }
        }
        else{
            return redirect('login');
        }

    }
}
