<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\Registerequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //


public function formlogin(){
    return view('auth.formlogin');
}
public function formloginemployeur(){
    return view('auth.formloginemployeur');
}



public function login(Request $request)
{
    $employeurpage = true;
    // Validation des données de la requête
    $values = $request->validate([
        'email' => 'required|email', // Ne pas utiliser 'unique' ici, car nous voulons valider l'existence de l'utilisateur
        'password' => 'required|min:2',
    ]);

    // Tentative de connexion
    if (Auth::attempt(['email' => $values['email'], 'password' => $values['password']])) {
        // Rediriger vers la page d'accueil ou la page prévue après la connexion

            return redirect()->intended('/profile');

    } else {
        // Rediriger vers la page précédente avec un message d'erreur
        return redirect()->back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ])->withInput(); // Garde les anciennes valeurs de l'input
    }
}



public function formregisteremplyeur(){

    return view('auth.formregisteremplyeur');

}

public function formregister(){

    return view('auth.formregister');

}


public function register(Request $request){
////
//return $request;
$values=$request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:users,email', // Assurez-vous de remplacer 'admins' par le nom de votre table
    'password' => 'required|min:8|confirmed', // 'confirmed' vérifie que 'password_confirmation' est présent et correspond

]);
// dd($values);
// Créer l'administrateur
$values['password']=Hash::make($request->password);
User::create($values);
  //  User::create($request->all());
        return redirect()->route('formregister')
            ->with('success', 'User created successfully.');
}






public function registeremplyeur(Request $request){
    ////
   // return $request;
    $values=$request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email', // Assurez-vous de remplacer 'admins' par le nom de votre table
        'password' => 'required|min:8|confirmed', // 'confirmed' vérifie que 'password_confirmation' est présent et correspond
        'role'=>'required',

    ]);
    // dd($values);
    // Créer l'administrateur
    $values['password']=Hash::make($request->password);
    User::create($values);
      //  User::create($request->all());
            return redirect()->route('formregisteremplyeur')
                ->with('success', 'User created successfully.');
    }

public function logout(){
  
    Auth::logout();
 return redirect('/login/form');


}





}
