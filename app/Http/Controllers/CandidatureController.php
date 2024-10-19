<?php

namespace App\Http\Controllers;

use App\Models\Annance;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidatureController extends Controller
{
    //


public function store(Request $request,Annance $annance){

//dd($annance->id);
$user =Auth::user();


$values=$request->validate([

'phone'=>'required',
'sexe'=>'required',
'niveau_etude'=>'required',
'annees_experiences'=>'required',

]);

if (!$user->cv) {
    $values['cv'] = 'required|mimes:pdf';
} else {
    $values['cv'] = 'nullable|mimes:pdf'; // Si un CV existe, le champ peut être vide
}

if ($request->hasFile('cv')) {
$values['cv']=$request->file('cv')->store('cvs','public');
}

$user->update($values);


$values2['lettre_motivation']=$request->lettre_motivation;
$values2['user_id']=Auth::user()->id;
$values2['annance_id']="$annance->id";
//dd($values2);
Candidature::create($values2);

return redirect()->route('messagecandidature')
->with('success','Votre candidature a ete bien envoye,Votre demande est en cours de traitement');


}


public function messagecandidature(){
    return view("content.profile.messagecandidature");
}

public function index(){


    $userId = Auth::user()->id; // Récupérer l'ID de l'utilisateur connecté
    $candidatures = Candidature::with(['annance', 'user']) // Charger les annonces et les utilisateurs
    ->whereHas('annance', function ($query) use ($userId) {
        $query->where('user_id', $userId);
    })
    ->get();

return view('content.candidature.lescandidats',compact('candidatures'));

}


public function updatetatcandidature(Request $request,Candidature $candidature){

    //dd($request->etat);
    $request->validate([
     'etat' => 'required|in:publiée,en attente,fermée',
 ]);
      $candidature->etat = $request->etat;
      $candidature->save();

 return redirect()->route('lescandidatures')->with('success', 'L\'état de la candidature a été mis à jour avec succès.');


     }


}
