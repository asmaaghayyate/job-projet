<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Annance;
use Illuminate\Http\Request;

class AnnancesController extends Controller
{

    public function index(){

        $lesannances=Annance::latest()->paginate(10);
        return view('admin.content.annance.index',compact('lesannances'));
    }


    public function indexenattente(){

        $lesannances=Annance::where('etat','en attente')->latest()->paginate(10);
        return view('admin.content.annance.indexannonceenattente',compact('lesannances'));
    }

    public function indexpubliee(){

        $lesannances=Annance::where('etat','publiée')->latest()->paginate(10);
        return view('admin.content.annance.indexannoncepubliee',compact('lesannances'));
    }


    public function indexfermee(){

        $lesannances=Annance::where('etat','fermée')->latest()->paginate(10);
        return view('admin.content.annance.indexannoncefermee',compact('lesannances'));
    }



    public function updatetat(Request $request,Annance $annance){

   //dd($request->etat);
   $request->validate([
    'etat' => 'required|in:publiée,en attente,fermée',
]);
     $annance->etat = $request->etat;
     $annance->save();


    return redirect()->back()
    ->with('success', 'l\'annonce a été mis à jour  avec succès.');


    }



 public function toggleBlock(Annance $annance)
{
    //$user = User::findOrFail($id);

   //dd($user->is_blocked );
    $annance->is_blocked = !$annance->is_blocked;
    $annance->save();

    // $annances=Annance::where('id',$annance->id);

    // $annances->update(['etat'=>'fermée']);


    return redirect()->back()
    ->with('success', 'L\'annonce a été ' . ($annance->is_blocked ? 'bloqué' : 'débloqué') . '.');



}



public function destroy(Annance $annance){

    {
        if ($annance) {
            $annance->delete();
            // $client->user()->delete();
        }

    return redirect()->back()
    ->with('success', 'L\'annonce a été ' . 'l\'annonce a été supprimée avec succès.');


}

}


    public function titre(Request $request){

        $titre = $request->input('titre');
   $lesannances=Annance::where('titre' ,'like',$request->titre.'%')
   ->paginate(10);


   return view('admin.content.annance.index',compact('titre','lesannances'));


    }



}
