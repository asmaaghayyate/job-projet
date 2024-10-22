<?php

namespace App\Http\Controllers;

use App\Models\Annance;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{





public function postuleremplois(Annance $annance){


return view('content.emplois.postuleremplois',compact('annance'));

}





public function monprofile(){
    $profileActive = true;
    return view('content.profile.profile',compact('profileActive'));

    }


    public function ameliorerprofileemployeur(){
        return view('content.profile.ajouterentreprise');
    }


 public function ameliorerprofile(){
        return view('content.profile.ameliorerprofile');
    }


public function mesentreprises(){

    $user = Auth::user()->id;
    $mesentreprises=Entreprise::where('user_id', $user)
    ->get();
    return view('content.profile.mesentreprises',compact('mesentreprises'));
}




public function mesannances(){
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
