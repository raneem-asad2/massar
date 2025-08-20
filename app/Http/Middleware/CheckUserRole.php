<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  ...$roles  // We can accept one or more roles
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // First, check if the user is authenticated
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Check if the user's role is in the list of allowed roles
        if (!in_array(Auth::user()->role->role_name, $roles)) {
            // If not, abort with a 403 Unauthorized error
            abort(403, 'UNAUTHORIZED ACCESS.');
        }

        // If the user has the correct role, continue with the request
        return $next($request);
    }
}