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
        DB::table('model_has_roles')->insert([
            ['role_id' => '1', 'model_type' => 'App\User', 'model_id' => '1']
        ]);
        $role = Role::create(['name' => 'tegal']);
        $role = Role::create(['name' => 'solo']);
        $role = Role::create(['name' => 'semarang']);
        $role = Role::create(['name' => 'purwokerto']);
        $role = Role::create(['name' => 'yogya']);
        $role = Role::create(['name' => 'kepu']);
        
    }
}
