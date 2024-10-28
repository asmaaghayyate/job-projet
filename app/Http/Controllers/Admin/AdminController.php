<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //


    public function index()
    {



        $data = Admin::with('permissions')->paginate(10); // Récupérer les utilisateurs avec le rôle "admin"


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

    if ($request->has('permissions')) {
        $user->syncPermissions($request->input('permissions'));
    }

    return redirect()->route('admin.index')
    ->with('success', 'L\'administrateur a été ajoute avec succès.');


}


public function edit(Admin $admin)
{

    return view('admin.content.admin.edit',
     compact('admin'));
}

public function update(Request $request, Admin $admin){

    $admin->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->filled('password') ? Hash::make($request->password) : $admin->password,
    ]);

    if ($request->has('permissions')) {
        $admin->syncPermissions($request->input('permissions'));
    } else {
        // Si aucune permission n'est cochée, retirer toutes les permissions
        $admin->syncPermissions([]);
    }

    return redirect()->route('admin.index')
    ->with('success', 'L\'administrateur a été mis à jour avec succès.');
}


public function destroy(Admin $admin)
{

        $admin->delete();
        return redirect()->route('admin.index')
            ->with('success', 'L\'administrateur a été supprime avec succès.');

}




}
