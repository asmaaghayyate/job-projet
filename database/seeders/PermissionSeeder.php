<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'supprimer_utilisateur', 'guard_name' => 'admin']);
        Permission::create(['name' => 'bloquer_utilisateur', 'guard_name' => 'admin']);
        Permission::create(['name' => 'supprimer_annonce', 'guard_name' => 'admin']);
        Permission::create(['name' => 'bloquer_annonce', 'guard_name' => 'admin']);
        Permission::create(['name' => 'changer_etat_annonce', 'guard_name' => 'admin']);
        Permission::create(['name' => 'creer_admin', 'guard_name' => 'admin']);
        Permission::create(['name' => 'supprimer_admin', 'guard_name' => 'admin']);
        Permission::create(['name' => 'modifier_admin', 'guard_name' => 'admin']);
    }


    
}
