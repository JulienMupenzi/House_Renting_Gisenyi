<?php

namespace App\Http\Middleware;

use Closure;

class AgentMiddleware
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

        if ($user && ($user->isAgent() || $user->isAdmin())) {
            return $next($request);
        }
        abort(401);
    }
}
