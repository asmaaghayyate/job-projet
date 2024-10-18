<?php

namespace App\Http\Controllers;

use App\Models\Annance;
use Illuminate\Http\Request;

class ProfileController extends Controller
{





public function postuleremplois(Annance $annance){

return view('content.emplois.postuleremplois',compact('annance'));

}


}
