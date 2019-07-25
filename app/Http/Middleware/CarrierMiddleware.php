<?php

namespace App\Http\Middleware;

use App\Carrier;
use Closure;

class CarrierMiddleware
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
        $shipper = Carrier::where('user_id', $request->user()->id);
        if(!$shipper)
            return redirect()->route('start');


        return $next($request);
    }
}
