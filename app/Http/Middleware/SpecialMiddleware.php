<?php

namespace App\Http\Middleware;

use Closure;

class SpecialMiddleware
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
        $user = $request->user();

        if ($user && ($user->isSpecial() || $user->isAgent() || $user->isAdmin())) {
            return $next($request);
        }
        abort(401);
    }
}
