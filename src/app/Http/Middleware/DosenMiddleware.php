<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (! Auth::check()) {
            return redirect()->route('dosen.login');
        }

        if (strtolower(Auth::user()->role) !== 'dosen') {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
