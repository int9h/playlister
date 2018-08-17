<?php

namespace App\Http\Middleware;

use Closure;

class VerifyHashLength
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
        if(strlen($request->route('hash')) != 32) {
            abort(404);
        }

        return $next($request);
    }
}
