<?php

namespace App\Http\Controllers;

use App\Models\Annance;
use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class EntrepriseController extends Controller
{
    //



public function create(){
    return view('content.profile.ajouterentreprise');
}



public function store(Request $request){

    //dd($request);

    $values=$request->validate([

        'name'=>'required',
         'adresse'=>'required',
          'image'=>'image|mimes:png,jpg,svg',
          'description'=>'required',

    ]);

    $values['user_id']=Auth::user()->id;
    $values['slug']=\Str::slug($request->name);

    if($request->file('image')){
    $values['image']=$request->file('image')->store('entreprise','public');
    }
      Entreprise::create($values);

    return redirect()->route('entreprise.index',Auth::user()->id)
    ->with('success','Votre entreprise est bien ajoute');

    }


    public function index(){

        $user = Auth::user()->id;
        $mesentreprises=Entreprise::where('user_id', $user)
        ->get();
        return view('content.profile.mesentreprises',compact('mesentreprises'));
    }



    public function destroy(Entreprise $entreprise){

        {
            if ($entreprise) {
                $entreprise->delete();

            // $client->user()->delete();
            }

            return redirect()->route('entreprise.index')
                ->with('success', 'l\'entreprise a été supprimée avec succès.');
        }

    }



}
