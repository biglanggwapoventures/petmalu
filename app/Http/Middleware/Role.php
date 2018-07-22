<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, string...$roles)
    {
        $user = Auth::user();

        if (in_array($user->role, $roles)) {
            return $next($request);
        }

        return redirect('/');
    }
}
