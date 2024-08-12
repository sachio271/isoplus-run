<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // if (Auth::check()) {
        //     $user = Auth::user();

        //     // Redirect based on the user's role
        //     if ($user->level === 'admin') {
        //         return redirect()->route('dashboard');
        //     } elseif ($user->level === 'user') {
        //         return redirect()->route('home');
        //     }

        //     // Optionally, handle other roles or default redirection
        //     return redirect()->route('default_route');
        // }

        if (!Auth::check() || Auth::user()->level !== $role) {
            return redirect()->route('unauthorized');
        }

        return $next($request);
    }
}
