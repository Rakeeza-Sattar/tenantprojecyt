<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Create permissions
        $permissions = [
            'view-users', 'create-users', 'edit-users', 'delete-users',
            'view-tenants', 'create-tenants', 'edit-tenants', 'delete-tenants',
            'view-customers', 'create-customers', 'edit-customers', 'delete-customers',
            'view-items', 'create-items', 'edit-items', 'delete-items',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create roles
        $superAdmin = Role::firstOrCreate(['name' => 'super-admin']);
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $user = Role::firstOrCreate(['name' => 'user']);

        // Assign permissions to roles
        $superAdmin->syncPermissions(Permission::all());
        
        $admin->syncPermissions([
            'view-tenants', 'create-tenants', 'edit-tenants', 'delete-tenants',
            'view-customers', 'create-customers', 'edit-customers', 'delete-customers',
            'view-items', 'create-items', 'edit-items', 'delete-items',
        ]);
        
        $user->syncPermissions([
            'view-customers', 'view-items'
        ]);

        // Create default super admin user if not exists
        $superAdminUser = User::firstOrCreate([
            'email' => 'superadmin@example.com'
        ], [
            'name' => 'Super Admin',
            'password' => bcrypt('password')
        ]);
        
        if (!$superAdminUser->hasRole('super-admin')) {
            $superAdminUser->assignRole('super-admin');
        }
    }
}
