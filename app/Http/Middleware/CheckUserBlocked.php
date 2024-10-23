<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserBlocked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        if (Auth::user()->is_blocked) {
             Auth::logout();
            // Rediriger vers la page de login si l'utilisateur n'est pas authentifié
            return redirect()->route('formlogin')
            ->withErrors(['error' => 'Votre compte a été bloqué.']);  // ou '/admin/login'
        }

        return $next($request);
    }



}
