<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckBDERole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $roles = ['Bde']; 
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
