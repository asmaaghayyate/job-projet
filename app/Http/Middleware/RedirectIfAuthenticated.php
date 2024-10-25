<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
       // dd($request->getMethod());


        // if ($request->isMethod('post')) {
        //     return redirect(RouteServiceProvider::HOME);
        // }

        $guards = empty($guards) ? [null] : $guards;

        // Vérifie chaque guard passé en paramètre
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() ) {
                // Redirige l'utilisateur vers la page d'accueil ou autre page (par exemple un dashboard)
                // en fonction du guard authentifié
                if ($guard === 'admin' ) {
                    // Si l'utilisateur est authentifié en tant qu'admin, on redirige vers le tableau de bord admin
                    return redirect()->route('admin.dashboard');
                } else {
                    // Si l'utilisateur est authentifié via un autre guard (web par exemple)
                    return redirect(RouteServiceProvider::HOME);
                }
            }
        }

        // Si l'utilisateur n'est pas authentifié avec aucun des guards, on laisse passer la requête

        return $next($request);


    }
}
