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
            Permission::create(['name' => $permission]);
        }

        // Create roles
        $superAdmin = Role::create(['name' => 'super-admin']);
        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);

        // Assign permissions to roles
        $superAdmin->givePermissionTo(Permission::all());
        
        $admin->givePermissionTo([
            'view-tenants', 'create-tenants', 'edit-tenants', 'delete-tenants',
            'view-customers', 'create-customers', 'edit-customers', 'delete-customers',
            'view-items', 'create-items', 'edit-items', 'delete-items',
        ]);
        
        $user->givePermissionTo([
            'view-customers', 'view-items'
        ]);

        // Create default super admin user
        $superAdminUser = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('password')
        ]);
        $superAdminUser->assignRole('super-admin');
    }
}