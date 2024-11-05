<?php

namespace App\Http\Controllers;

use App\Models\Annance;
use Illuminate\Http\Request;

class EmploisController extends Controller
{
    //


// public function emplois(Request $request){
//     $query = Annance::query();
//     if (!empty($request->categorie && empty($request->ville))) {
//         $query->where('categorie', 'like', trim($request->categorie) . "%")
//         ->where('etat', "publiée")
//         ->where('is_blocked','false');
//     }

//     if (!empty($request->ville && empty($request->categorie))) {
//         $query->orWhere('ville', 'like', trim($request->ville) . "%")
//         ->where('etat', "publiée")
//         ->where('is_blocked','false');
//     }
//     if (!empty($request->categorie) && !empty($request->ville)) {
//         $query->where('categorie', 'like', trim($request->categorie) . "%")
//         ->where('ville', 'like', trim($request->ville) . "%")
//         ->where('etat', "publiée")
//         ->where('is_blocked','false');
//     }
//    //dd($query->get());
//     $annances = $query->paginate(10);
// //dd($annances);
// $annancescount=$query->count();

// $categories = $annances->pluck('categorie')->unique()->toArray();

//     // Si tu veux envoyer une seule catégorie, tu peux le faire ainsi :
//     $categorie = !empty($categories) ? $categories[0] : null;

//     return view("content.emplois.emplois",compact('annances','categorie','annancescount'));
// }






public function filterEmplois(Request $request) {

    //dd($request->categorie);
   // $query = query();
    if (!empty($request->categorie && empty($request->ville))) {

       $query = Annance::where('categorie', 'like', trim($request->categorie) . "%")
        ->where('etat', "publiée")
        ->where('is_blocked','false');

    // Compter le nombre total d'annonces
    $annancescount = $query->count();
    $annances = $query->paginate(2);
      //dd( "1".$annancescount);
    }

    if (!empty($request->ville && empty($request->categorie))) {

        $query =  Annance::Where('ville', 'like', trim($request->ville) . "%")

        ->where('etat', "publiée")
        ->where('is_blocked','false');

        $annancescount = $query->count();
        $annances = $query->paginate(2);
       // dd( "2".$annancescount);
    }
    if (!empty($request->categorie) && !empty($request->ville)) {


        $query =  Annance::where('categorie', 'like', trim($request->categorie) . "%")
        ->where('ville', 'like', trim($request->ville) . "%")

        ->where('etat', "publiée")
        ->where('is_blocked','false');
        $annancescount = $query->count();
        $annances = $query->paginate(2);

       // dd( "3".$annancescount);
    }


   //dd($query->get());
    //$annances->get();

//$categories = $annances->pluck('categorie')->unique()->toArray();

    // Si tu veux envoyer une seule catégorie, tu peux le faire ainsi :
   // $categorie = !empty($categories) ? $categories[0] : null;

    return view("content.emplois.emplois",compact('annances','annancescount'));
}










public function showemplois($annance,$slug){
//dd($annance);
    $annance = Annance::where('id', $annance)->firstOrFail();
return view('content.emplois.showemplois',compact('annance'));

}






}
