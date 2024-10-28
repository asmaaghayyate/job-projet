<?php

namespace App\Http\Controllers\Admin;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\Controller;
use App\Models\Annance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
class UtilisateurController extends Controller
{
    //


    public function index(){


        // $permissions = Permission::where('guard_name', 'admin')->get();
        // dd($permissions);


        // $superAdminRole = Role::findByName('super_admin', 'admin');
        // $permissions = $superAdminRole->permissions; // Récupérer toutes les permissions
        // dd($permissions);
        // $user = Auth::guard('admin')->user(); // Récupère l'utilisateur authentifié

        // if ($user) {
        //     try {
        //         $permissions = $user->getAllPermissions(); // Assure-toi que le modèle utilise le trait HasRoles
        //         dd($permissions);
        //     } catch (\Exception $e) {
        //         dd($e->getMessage());
        //     }
        // } else {
        //     dd('Aucun utilisateur authentifié.');
        // }



        $lesutilisateurs=User::latest()->paginate(10);
        return view('admin.content.utilisateur.index',compact('lesutilisateurs'));
    }



    public function destroy(User $user){

        {
            if ($user) {
                $user->delete();




                // $client->user()->delete();
            }

            return redirect()->route('admin.utilisateurs')
                ->with('success', 'l\'utilisateur a été supprimée avec succès.');
        }

    }


    public function toggleBlock(User $user)
{
    //$user = User::findOrFail($id);

   //dd($user->is_blocked );
    $user->is_blocked = !$user->is_blocked;
    $user->save();

   $annances=Annance::where('user_id',$user->id);

   $annances->update(['etat'=>'fermée']);

    return redirect()->back()
    ->with('success', 'L\'utilisateur a été ' . ($user->is_blocked ? 'bloqué' : 'débloqué') . '.');
}

}
