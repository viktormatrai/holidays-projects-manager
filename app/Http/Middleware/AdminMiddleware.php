<?php

namespace App\Http\Middleware;

use Closure;
use http\Env\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->user_role != 'employee'){
            return new Response(view('unauthorized')->with('user_role', 'admin'));
        }
        return $next($request);
    }
}
