<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_editor = Role::create(['name' => 'editor']);

        $permission_create_role = Permission::create(['name' => 'create role']);
        $permission_read_role = Permission::create(['name' => 'read role']);
        $permission_update_role = Permission::create(['name' => 'update role']);
        $permission_delete_role = Permission::create(['name' => 'delete role']);

        $permission_create_propietario = Permission::create(['name' => 'create propietarios']);
        $permission_read_propietario = Permission::create(['name' => 'read propietarios']);
        $permission_update_propietario = Permission::create(['name' => 'update propietarios']);
        $permission_delete_propietario = Permission::create(['name' => 'delete propietarios']);

        $permission_create_vehiculo = Permission::create(['name' => 'create vehiculos']);
        $permission_read_vehiculo = Permission::create(['name' => 'read vehiculos']);
        $permission_update_vehiculo = Permission::create(['name' => 'update vehiculos']);
        $permission_delete_vehiculo = Permission::create(['name' => 'delete vehiculos']);

        $permission_admin = [
            $permission_create_role,
            $permission_read_role,
            $permission_update_role,
            $permission_delete_role,
            $permission_create_propietario,
            $permission_read_propietario,
            $permission_update_propietario,
            $permission_delete_propietario,
            $permission_create_vehiculo,
            $permission_read_vehiculo,
            $permission_update_vehiculo,
            $permission_delete_vehiculo,
        ];

        $permission_editor = [
            $permission_create_vehiculo,
            $permission_read_vehiculo,
            $permission_update_vehiculo,
            $permission_delete_vehiculo,
        ];

        $role_admin->syncPermissions($permission_admin);
        $role_editor->syncPermissions($permission_editor);
    }
}
