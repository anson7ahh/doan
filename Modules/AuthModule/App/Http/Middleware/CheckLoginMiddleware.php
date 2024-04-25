<?php

namespace Modules\AuthModule\App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLoginMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)

    {
        $token = $request->cookie('login');
        if (!$token) {

            return redirect()->route('login.crate');
        }
        return $next($request);
    }
}