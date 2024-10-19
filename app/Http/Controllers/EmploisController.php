<?php

namespace App\Http\Controllers;

use App\Models\Annance;
use Illuminate\Http\Request;

class EmploisController extends Controller
{
    //


public function emplois(Request $request){



$annances=Annance::where('categorie','LIKE',"%".$request->categorie."%")
->orwhere('ville','LIKE',"%".$request->ville."%")
->orwhere('titre','LIKE',"%".$request->titre."%")
->paginate(10);




$annancescount=Annance::where('categorie','LIKE',"%".$request->categorie."%")
->orwhere('ville','LIKE',"%".$request->ville."%")
->orwhere('titre','LIKE',"%".$request->titre."%")

->count();

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
