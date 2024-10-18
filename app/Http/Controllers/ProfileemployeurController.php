<?php

namespace App\Http\Controllers;

use App\Models\Annance;
use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileemployeurController extends Controller
{
    //


 public function monprofileemployeur(){
    $profileActive = true;
    return view('content.employeur.profileemployeur',compact('profileActive'));

    }


    public function ameliorerprofileemployeur(){
        return view('content.employeur.ajouterentreprise');
    }

 public function ameliorerprofile(){
        return view('content.employeur.ameliorerprofile');
    }
public function mesentreprises(User $user){
    $mesentreprises=Entreprise::where('user_id', $user->id)
    ->get();
    return view('content.employeur.mesentreprises',compact('mesentreprises'));
}


public function mesannances(User $user){
    $mesannances=Annance::where('etat','publiée')
    ->where('user_id', $user->id)
    ->get();
    return view('content.employeur.mesannances',compact('mesannances'));
}


}
