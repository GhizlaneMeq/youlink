<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response)  $next
     */
    public function handle(Request $request, Closure $next)
{
    $roles = ['admin', 'moderator'];
    if (!$request->user()) {
        return redirect()->route('login')->with('error', 'You need to login to access this page');
    }

    foreach ($roles as $role) {
        if ($request->user()->roles->contains('name', $role)) {
            return $next($request);
        }
    }

    return response()->view('error');
}

}
