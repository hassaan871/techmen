<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsSeller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->is_blocked)
        {
            abort(403, 'Your account has been blocked by the administrator.');
        }

        if (Auth::user()->role !== 'seller')
        {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
