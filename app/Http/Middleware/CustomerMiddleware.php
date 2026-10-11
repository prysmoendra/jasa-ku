<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('home')->withErrors([
                'auth' => 'Silakan login terlebih dahulu.'
            ]);
        }

        // Add additional customer-specific checks here if needed
        // Example: Check if the authenticated user is a customer
        if (Auth::user()->role !== 'customer') {
            return redirect()->route('home')->withErrors([
                'auth' => 'Anda tidak memiliki akses ke halaman ini.'
            ]);
        }

        return $next($request);
    }
}
