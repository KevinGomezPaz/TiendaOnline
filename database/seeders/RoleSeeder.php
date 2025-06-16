<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        /**Establece los roles */
        $role1 = Role::create(['name'=>'tendero']);
        $role2 = Role::create(['name'=>'proveedor']);

        /**Establece los permisos, solo es necesario cambiar el texto despues de la flecha*/
        $permission = Permission::create(['name' => 'edit articles']);
    }
}
