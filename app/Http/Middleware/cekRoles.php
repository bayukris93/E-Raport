<?php

namespace App\Http\Middleware;

use Closure;

class cekRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        // return $next($request);
        if (in_array($request->user()->roles, $roles)) {
            return $next($request);
        }
        return redirect('/');
    }
}
