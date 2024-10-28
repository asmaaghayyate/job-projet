<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'), // Assure-toi de hasher le mot de passe
        ]);


     $superAdminRole = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'admin']);

        // Récupérer toutes les permissions pour le guard admin
        $permissions = Permission::where('guard_name', 'admin')->get();

        // Donner toutes les permissions à ce rôle
        $superAdminRole->syncPermissions($permissions);

        // Associer le rôle à l'administrateur
        $admin->assignRole($superAdminRole);

    }
}
