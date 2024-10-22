<?php

namespace App\Http\Controllers;

use App\Models\Annance;
use Illuminate\Http\Request;

class EmploisController extends Controller
{
    //


public function emplois(Request $request){



    $query = Annance::query();

    if (!empty($request->categorie && empty($request->ville))) {
        $query->where('categorie', 'like', trim($request->categorie) . "%");
    }

    if (!empty($request->ville && empty($request->categorie))) {
        $query->orWhere('ville', 'like', trim($request->ville) . "%");
    }

    if (!empty($request->categorie) && !empty($request->ville)) {
        $query->where('categorie', 'like', trim($request->categorie) . "%")
        ->where('ville', 'like', trim($request->ville) . "%");
    }

   //dd($query->get());

    $annances = $query->paginate(10);
//dd($annances);



$annancescount=$query->count();


$categories = $annances->pluck('categorie')->unique()->toArray();

    // Si tu veux envoyer une seule catégorie, tu peux le faire ainsi :
    $categorie = !empty($categories) ? $categories[0] : null;

    return view("content.emplois.emplois",compact('annances','categorie','annancescount'));
}


public function showemplois($slug){

    $annance = Annance::where('slug', $slug)->firstOrFail();
return view('content.emplois.showemplois',compact('annance'));

}



}
