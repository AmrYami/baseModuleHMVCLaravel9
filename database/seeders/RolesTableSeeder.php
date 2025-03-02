<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Users\Models\User;

class RolesTableSeeder extends Seeder
{
    public function run()
    {

        // ✅ Create or find the Admin Role
        $role = Role::firstOrCreate(['name' => 'CRM Admin', 'guard_name' => 'web']);

        // ✅ Ensure permissions exist before assigning
        $permissions = Permission::all();
        if ($permissions->isNotEmpty()) {
            $role->syncPermissions($permissions);
        }

        $superAdminTeam = Team::first();

        // ✅ Find the first user (Admin)
        $admin = User::findOrFail(1);


//        $admin->teams()->attach($superAdminTeam, ['role' => 'CRM Admin']);


//        $admin->current_team_id = $superAdminTeam->id;
//
//        User::where('id', 1)->update(['current_team_id' => $superAdminTeam->id]);

//        app(PermissionRegistrar::class)->setPermissionsTeamId(1);
        app(PermissionRegistrar::class)->setPermissionsTeamId(null);
        // Assign Role with Team ID
        $admin->assignRole('CRM Admin');


    }
}
