<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Checks is the user is logged in or if they have admin
        if(!auth()->check() || !auth()->user()->admin) {
            abort(403);
        }

        return $next($request);
    }
}
