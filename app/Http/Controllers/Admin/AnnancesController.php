<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Annance;
use Illuminate\Http\Request;

class AnnancesController extends Controller
{

    public function lesannances(){

        $lesannances=Annance::latest()->paginate(15);
        return view('admin.content.annance.index',compact('lesannances'));
    }


    public function updatetat(Request $request,Annance $annance){

   //dd($request->etat);
   $request->validate([
    'etat' => 'required|in:publiée,en attente,fermée',
]);
     $annance->etat = $request->etat;
     $annance->save();

return redirect()->route('lesannances')->with('success', 'L\'état de l\'annonce a été mis à jour avec succès.');


    }


}
