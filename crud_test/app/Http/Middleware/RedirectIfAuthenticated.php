<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $user = Auth::user();
            
            // Log the user's role
            \Log::info("User role: {$user->role}");
    
            // Access the casted 'role' attribute directly
            $role = $user->role;
    
            if ($role === 'user') {
                return redirect('/user/home');
            } elseif ($role === 'staff') {
                return redirect('/staff/home');
            } elseif ($role === 'admin') {
                return redirect('/admin/home');
            }
        }
    
        return $next($request);
    }
    
    
}
