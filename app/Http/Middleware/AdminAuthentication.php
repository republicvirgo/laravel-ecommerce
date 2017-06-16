<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Contracts\Auth\Guard;
// use Illuminate\Http\RedirectResponse;

class AdminAuthentication
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
            if ($user->is_admin) {
                return $next($request);
            }
        return redirect('/');
    }
    // public function handle($request, Closure $next)
    // {
    //     return $next($request);
    // }
}
