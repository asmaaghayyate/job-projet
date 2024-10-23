<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //


    public function index()
    {
        $data = Admin::paginate(10); // Récupérer les utilisateurs avec le rôle "admin"
        return view('admin.content.admin.index', compact('data'));
    }


public function create(){

    return view('admin.content.admin.create');
}


public function store(Request $request){

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:admins,email', // Assurez-vous de remplacer 'admins' par le nom de votre table
        'password' => 'required|min:2', // 'confirmed' vérifie que 'password_confirmation' est présent et correspond
    ]);


    $user = Admin::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('admin.admin.index')
    ->with('success', 'Admin created successfully.');


}



}
