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
    return view('content.profile.profileemployeur',compact('profileActive'));

    }


    public function ameliorerprofileemployeur(){
        return view('content.profile.ajouterentreprise');
    }

 public function ameliorerprofile(){
        return view('content.profile.ameliorerprofile');
    }


public function mesentreprises(User $user){
    $mesentreprises=Entreprise::where('user_id', $user->id)
    ->get();
    return view('content.profile.mesentreprises',compact('mesentreprises'));
}




public function mesannances(User $user){
    $mesannancespubliee=Annance::where('etat','publiée')
    ->where('user_id', $user->id)
    ->get();
    $mesannancesenattente=Annance::where('etat','en attente')
    ->where('user_id', $user->id)
    ->get();
    return view('content.profile.mesannances',compact('mesannancespubliee','mesannancesenattente'));
}


}
