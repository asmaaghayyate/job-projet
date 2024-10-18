<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnanceController extends Controller
{
    //

  public function publierannance(){

    $entreprises=Entreprise::where('user_id',Auth::user()->id)->get();

    //dd($entreprises->name);
    return view("content.employeur.publierannance",compact('entreprises'));
  }
}
 