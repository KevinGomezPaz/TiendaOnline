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
        $tendero = Role::create(['name'=>'tendero']);
        $proveedor = Role::create(['name'=>'proveedor']);

        /**Establece los permisos, solo es necesario cambiar el texto despues de la flecha*/
        //Permisos para el proveedor
        $agregarProducto = Permission::create(['name' => 'proveedor.agregar.producto'])->assignRole($proveedor);
        $mostrarProducto = Permission::create(['name' => 'proveedor.mostrar.producto'])->assignRole($proveedor);
        $actualizarProducto = Permission::create(['name' => 'proveedor.actualizar.producto'])->assignRole($proveedor);
        $eliminarProducto = Permission::create(['name' => 'proveedor.eliminar.producto'])->assignRole($proveedor);
        $listarProductos = Permission::create(['name' => 'proveedor.listar.productos'])->assignRole($proveedor);
        $verPedidosRecibidos = Permission::create(['name' => 'proveedor.ver.pedidos.recibidos'])->assignRole($proveedor);
        $verEstadisticas = Permission::create(['name' => 'proveedor.ver.estadisticas'])->assignRole($proveedor);
        
        //Permisos para el tendero
        $comprarProducto = Permission::create(['name' => 'tendero.comprar.producto'])->assignRole($tendero);
        $buscarProducto = Permission::create(['name' => 'tendero.buscar.producto'])->assignRole($tendero);
        $verPedidosRealizados = Permission::create(['name' => 'tendero.ver.pedidos.realizados'])->assignRole($tendero);
        $agregarTienda = Permission::create(['name' => 'tendero.agregar.tienda'])->assignRole($tendero);
        $actualizarTienda = Permission::create(['name' => 'tendero.actualizar.tienda'])->assignRole($tendero);
        $mostrarTienda = Permission::create(['name' => 'tendero.mostrar.tienda'])->assignRole($tendero);
        $eliminarTienda = Permission::create(['name' => 'tendero.eliminar.tienda'])->assignRole($tendero);
        $listarTienda = Permission::create(['name' => 'tendero.listar.tienda'])->assignRole($tendero);

        //El metodo "->assingRole() es un metodo generado por laravel permisons, nos permite relacionar un permiso con un solo rol"
        //En caso de querer relacionar un permiso con varios roles, debemos hacer uso del metodo "->syncRoles([$role1, $role2...]);"
    }
}
