<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Log;
use Symfony\Component\HttpFoundation\Response;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $securityCode= $request->header('code');
        $Ip= $request->ip();
        Log::info($Ip);
        if($securityCode=='abc123'){
            return $next($request);

        }
        else{
            return response()->json('You are Unauthrize',401);
        }
    }
}
