<?php

namespace App\Http\Controllers;

use App\Models\Annance;
use Illuminate\Http\Request;

class ProfileController extends Controller
{



public function ameliorerprofile(){
    return view('content.candidat.ameliorerprofile');
}


public function monprofile(){
    $profileActive = true; // Indique que la section profil est active
   // return view('votre_vue', compact('profileActive'));
    return view('content.candidat.profile',compact('profileActive'));
}


public function postuleremplois(Annance $annance){

return view('content.emplois.postuleremplois',compact('annance'));

}


}
