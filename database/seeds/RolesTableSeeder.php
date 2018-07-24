<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::create(['name' => 'manageadmin']);
        $role = Role::create(['name' => 'superadmin']);
        $role->givePermissionTo('manageadmin');
        $role = Role::create(['name' => 'admin-tegal']);
        $role = Role::create(['name' => 'admin-pekalongan']);
        $role = Role::create(['name' => 'admin-semarang']);
        $role = Role::create(['name' => 'admin-eonesia']);
        $role = Role::create(['name' => 'admin-dinamika']);
        $role = Role::create(['name' => 'admin-aria']); 
        DB::table('model_has_roles')->insert([
            [
                'role_id' => '1', 
                'model_type' => 'App\User', 
                'model_id' => '1'
            ],
            [
                'role_id' => '2', 
                'model_type' => 'App\User', 
                'model_id' => '2'
            ],
            [
                'role_id' => '3', 
                'model_type' => 'App\User', 
                'model_id' => '3'
            ],
            [
                'role_id' => '4', 
                'model_type' => 'App\User', 
                'model_id' => '4'
            ],
            [
                'role_id' => '5', 
                'model_type' => 'App\User', 
                'model_id' => '5'
            ],
            [
                'role_id' => '6', 
                'model_type' => 'App\User', 
                'model_id' => '6'
            ],
            [
                'role_id' => '7', 
                'model_type' => 'App\User', 
                'model_id' => '7'
            ],
        ]);       
    }
}
