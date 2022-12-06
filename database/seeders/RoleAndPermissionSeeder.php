<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'ver-usuarios']);
        Permission::create(['name' => 'crear-usuarios']);
        Permission::create(['name' => 'editar-usuarios']);
        Permission::create(['name' => 'borrar-usuarios']);

        Permission::create(['name' => 'ver-musculos']);
        Permission::create(['name' => 'crear-musculos']);
        Permission::create(['name' => 'editar-musculos']);
        Permission::create(['name' => 'borrar-musculos']);

        Permission::create(['name' => 'ver-ejercicios']);
        Permission::create(['name' => 'crear-ejercicios']);
        Permission::create(['name' => 'editar-ejercicios']);
        Permission::create(['name' => 'borrar-ejercicios']);

        Permission::create(['name' => 'ver-rutinas']);
        Permission::create(['name' => 'crear-rutinas']);
        Permission::create(['name' => 'editar-rutinas']);
        Permission::create(['name' => 'borrar-rutinas']);


        $adminRole = Role::create(['name' => 'Admin']);

        $adminRole->givePermissionTo([
            'ver-usuarios',
            'crear-usuarios',
            'editar-usuarios',
            'borrar-usuarios',
            'ver-musculos',
            'crear-musculos',
            'editar-musculos',
            'borrar-musculos',
            'ver-ejercicios',
            'crear-ejercicios',
            'editar-ejercicios',
            'borrar-ejercicios',
            'ver-rutinas',
            'crear-rutinas',
            'editar-rutinas',
            'borrar-rutinas',
        ]);

        $admin = User::first();
        $admin->assignRole('Admin');
    }
}
