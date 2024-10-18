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

//dd($request);
$user =Auth::user();


$values=$request->validate([

'phone'=>'required',
'sexe'=>'required',
'niveau_etude'=>'required',
'annees_experiences'=>'required',
'cv'=>'required|mimes:pdf',
]);


$values['cv']=$request->file('cv')->store('cvs','public');


$user->update($values);

$values2['lettre_motivation']=$request->lettre_motivation;
$values2['user_id']=Auth::user()->id;
$values2['annonce_id']=$annance->id;
Candidature::create($values2);

return redirect()->route('messagecandidature')
->with('success','Votre candidature a ete bien envoye,Votre demande est en cours de traitement');


}


public function messagecandidature(){
    return view("content.employeur.messagecandidature");

}




}
