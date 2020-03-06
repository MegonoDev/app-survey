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

        $dealer = Dealereo::create([
            'kode_dealer' => 'ALL',
            'nama_dealer' => 'ALL',
            'cabang' => 'ALL'
        ]);

        $dealer = Dealereo::create([
            'kode_dealer' => 'OBOH02',
            'nama_dealer' => 'PUTRA UTAMA MOTOR',
            'cabang' => 'SUKOHARJO'
        ]);
        $dealer = Dealereo::create([
            'kode_dealer' => 'DEALER3',
            'nama_dealer' => 'JOINT EVENT CUZTOMMAXI YAMAHA THE PARK',
            'cabang' => 'SUKOHARJO'
        ]);
        $dealer = Dealereo::create([
            'kode_dealer' => 'DEALER4',
            'nama_dealer' => 'TJM GROUP',
            'cabang' => 'SUKOHARJO'
        ]);
    }
}
