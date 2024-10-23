<?php

namespace App\Http\Middleware;

use App\Models\Candidature;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Verifypostule
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

   $userId = Auth::user()->id;
  $annonce = $request->route('annance'); // Assure-toi que l'ID de l'annonce est passé dans la route
  $annonceId=$annonce->id;
        // Vérifie le nombre de candidatures
  $count = Candidature::where('user_id', $userId)
  ->where('annance_id', $annonceId)->count();

  if ($count >= 1) {
   return redirect()->back()->with('error',
   'Vous ne pouvez pas postuler à cette annonce plusieurs fois.');
        }

        return $next($request);
    }



}
