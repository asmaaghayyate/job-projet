<?php

namespace App\Http\Controllers;

use App\Models\Annance;
use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class EmployeurController extends Controller
{
    //

    public function masteremployeur(){

        return view("layouts.masteremployeur");
    }

 public function messageannance(){

        return view("content.employeur.messageannance");
    }


public function store(Request $request){


$values=$request->validate([

    'name'=>'required',
     'adresse'=>'required',
      'image'=>'required|image|mimes:png,jpg,svg',
      'description'=>'required',

]);

$values['user_id']=Auth::user()->id;
$values['slug']=\Str::slug($request->name);
$values['image']=$request->file('image')->store('entreprise','public');

  Entreprise::create($values);

return redirect()->route('mesentreprises',Auth::user()->id)->with('success','Votre entreprise est bien ajoute');

}


public function storeannance(Request $request){

//dd($request->all());
    $values=$request->validate([

        'titre'=>'required',
         'ville'=>'required',
          'description'=>'required',
          'entreprise_id'=>'required',
          'categorie'=>'required',
          'type_emploi'=>'required',
    ]);

    $values['user_id']=Auth::user()->id;
    $values['slug']=\Str::slug($request->titre);

      Annance::create($values);

    return redirect()->route('messageannance')
    ->with('success','Votre annance est bien ajoute,Votre demande est en cours de traitement');

 }


public function update(Request $request){
 //dd($request->cv);


 $user =Auth::user();

$values['phone']=$request->phone;
$values['sexe']=$request->sexe;
$values['niveau_etude']=$request->niveau_etude;
$values['annees_experiences']=$request->annees_experiences;
if( $request->file('cv')){

$values['cv']=$request->file('cv')->store('cvs','public');
}

$user->update($values);
//User::save();
 return redirect()->route('monprofile')->with('success','Votre profile a ete bien modifie');


}




}
