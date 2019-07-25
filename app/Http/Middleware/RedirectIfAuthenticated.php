<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            if($request->path() === 'carrier-log')
                return redirect()->route('carrier-dash');

            if($request->path() === 'shipper-log')
                return redirect()->route('shipper-dash');

        }

        return $next($request);
    }
}
