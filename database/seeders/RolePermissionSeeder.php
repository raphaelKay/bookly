<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Roles
        $roles = [
            'administrator',
            'support',
            'user',
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        // Permissions
        $permissions = [
            'moderate user',
            'moderate bookmark',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // assign permissions to roles
        // admin
        Role::findByName('administrator')->syncPermissions(Permission::all());

        // support
        Role::findByName('support')->syncPermissions([
            'moderate bookmark',
        ]);
    }
}