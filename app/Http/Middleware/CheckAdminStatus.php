<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminStatus
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->is_admin == 1) {
            // Jika pengguna adalah admin, alihkan ke halaman reader tanpa navbar
            return redirect()->route('reader');
        }

        return $next($request);
    }
}
