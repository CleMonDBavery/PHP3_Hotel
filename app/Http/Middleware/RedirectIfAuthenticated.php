<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    // public function handle($request, Closure $next, ...$guards)
    // {
    //     foreach ($guards as $guard) {
    //         if (Auth::guard($guard)->check()) {
    //             return redirect('/'); // Hoặc route khác nếu đã đăng nhập
    //         }
    //     }

    //     return $next($request);
    // }


}
