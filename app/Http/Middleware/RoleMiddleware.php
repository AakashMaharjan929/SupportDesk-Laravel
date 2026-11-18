<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Gets User, Checks the role of the user and role required by route
        if (!$request->user() || $request->user()->role !== $role) {
            abort(403, "Unauthorized access.");
        }

        return $next($request); 
    }
}
