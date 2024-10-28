<?php

namespace App\Http\Controllers;

use App\Models\Annance;
use App\Models\Entreprise;
use Carbon\Carbon;
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
$user=Auth::user()->id;
    //dd($request->all());
     //$dateAujourdHui = Carbon::today()->format('d/m/Y');
    // $nombreannonce=Annance::whereDate('created_at',$dateAujourdHui)->count();
 //dd( $dateAujourdHui);
$values=$request->validate([
            'titre'=>'required',
             'ville'=>'required',
              'description'=>'required',
              'entreprise_id'=>'required',
              'categorie'=>'required',
              'type_emploi'=>'required',
 ]);

    $values['user_id']=$user;

    $values['slug']=\Str::slug($request->titre);

    $annonce=Annance::where('user_id', $user)
    ->where('slug',$values['slug'])->count();
 if($annonce>=1){

    return redirect()->back()->withErrors([
        'error' => 'Vous ne pouvez pas saisir la même annonce,veuillez entrer une autre annonce',
    ]);

  }else{
$dateAujourdHui = Carbon::today();

$nombreannonce=Annance::where('user_id', $user)
->whereDate('created_at',$dateAujourdHui)->count();

//dd($dateAujourdHui, $nombreannonce);

if($nombreannonce>=2){
    return redirect()->back()->withErrors([
        'error' => 'Vous avez atteint la limite de 2 annonces par jour, revenz demain',
    ]);
}else{
   Annance::create($values);
    return redirect()->route('messageannance')
    ->with('success','Votre annonce a été ajoutée, Votre demande est en cours de traitement');
}

}

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
