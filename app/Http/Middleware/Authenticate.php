<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    // public function handle($request, Closure $next, ...$guards)
    // {
    //     $this->authenticate($request, $guards);

    //     return $next($request);
    // }

    // protected function authenticate($request, array $guards)
    // {
    //     foreach ($guards as $guard) {
    //         if (Auth::guard($guard)->guest()) {
    //             abort(403, 'Unauthorized.');
    //         }
    //     }
    // }
}
