<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'duenio']);
        $role3 = Role::create(['name' => 'jugador']);

        $permiso1 = Permission::create(['name' => 'reservar turno'])->syncRoles([$role1,$role2,$role3]);
        $permiso2 = Permission::create(['name' => 'crear turno'])->syncRoles([$role1,$role2]);
        $permiso3 = Permission::create(['name' => 'editar turno'])->syncRoles([$role1,$role2]);
        $permiso4 = Permission::create(['name' => 'eliminar turno'])->syncRoles([$role1,$role2]);
        $permiso5 = Permission::create(['name' => 'crear cancha'])->syncRoles([$role2]);
        $permiso6 = Permission::create(['name' => 'editar cancha'])->syncRoles([$role2]);
        $permiso7 = Permission::create(['name' => 'eliminar cancha'])->syncRoles([$role2]);
        $permiso8 = Permission::create(['name' => 'crear local'])->syncRoles([$role1,$role2]);
        $permiso9 = Permission::create(['name' => 'editar local'])->syncRoles([$role1,$role2]);
        $permiso10 = Permission::create(['name' => 'eliminar local'])->syncRoles([$role1]);
    }
}
