<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the "moderator access" permission
        $permission = Permission::create([
            'name' => 'moderator access',
        ]);

        // Retrieve the "moderator" role
        $moderatorRole = Role::where('name', 'moderator')->first();

        // Attach the "moderator access" permission to the "moderator" role
        if ($moderatorRole) {
            $moderatorRole->permissions()->attach($permission);
        }
    }
}
