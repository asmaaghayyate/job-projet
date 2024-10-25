<?php

namespace App\Http\Controllers;

use App\Models\Annance;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnanceController extends Controller
{
    //


  public function publierannance(){

    $entreprises=Entreprise::where('user_id',Auth::user()->id)->get();

    //dd($entreprises->name);
    return view("content.profile.publierannance",compact('entreprises'));
  }


  public function messageannance(){

    return view("content.profile.messageannance");
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




     public function index(){
        $user = Auth::user()->id;
        $mesannancespubliee=Annance::where('etat','publiée')
        ->where('user_id', $user)
        ->get();
        $mesannancesenattente=Annance::where('etat','en attente')
        ->where('user_id', $user)
        ->get();
        return view('content.profile.mesannances',compact('mesannancespubliee','mesannancesenattente'));
    }



}
