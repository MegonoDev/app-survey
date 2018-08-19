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

        $dealer = Dealereo::create(['kode_dealer' => 'ALL']);
        $dealer = Dealereo::create(['kode_dealer' => 'YC1']);
        $dealer = Dealereo::create(['kode_dealer' => 'BRB']);
        $dealer = Dealereo::create(['kode_dealer' => 'SLW']);

    }
}
