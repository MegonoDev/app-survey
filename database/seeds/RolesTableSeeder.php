<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Dealereo;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $role = Role::create(['nama' => 'superadmin']);
        $role = Role::create(['nama' => 'pic']);
        $role = Role::create(['nama' => 'sales']);

        Dealereo::create(['nama_dealer' => 'all']);
    }
}
