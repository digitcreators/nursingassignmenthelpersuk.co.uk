<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
     public function handle($request, Closure $next)
    {
        // dd($request);
        if (!$request->hasHeader('Authorization')) {
            abort(401, 'Unauthorized');
        }
        if ($request->bearerToken() == config('services.payment.token')){

            return $next($request);
        }
        return abort(403);
    }
}
