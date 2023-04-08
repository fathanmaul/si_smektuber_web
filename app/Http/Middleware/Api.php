<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Api\Response;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Api
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return Response::unauthorized();
        }
        
        return $next($request);
    }
}
