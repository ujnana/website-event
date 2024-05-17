<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserHasRoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (! $request->user()->hasRole('Admin')) {
            return redirect()->route('dashboard.user');
        }
        return $next($request);
    }
}
