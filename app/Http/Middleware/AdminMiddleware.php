<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (\Illuminate\Support\Facades\Session::has('login')) {
            if (Auth::user()->level == "User") {
                abort('403', 'Bạn không có quyền truy cập');
            }
        }

        return $next($request);
    }
}
