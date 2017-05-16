<?php
namespace App\Core\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if (Auth::guest()) {
            dd('role');
            return redirect('login');
        }

        if (!$request->user()->isAn($role)) {
            abort(403);
        }

        return $next($request);
    }
}