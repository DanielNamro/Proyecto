<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user && $user->name == 'admin') {
            return $next($request);
        }
        abort(403, 'acceso denegado');
    }
}