<?php

namespace App\Http\Controllers;

use App\Models\Annance;
use App\Models\Candidature;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{



public function monprofile(){
    $profileActive = true;
    return view('content.profile.profile',compact('profileActive'));

    }

    public function ameliorerprofile(){
        return view('content.profile.ameliorerprofile');
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
