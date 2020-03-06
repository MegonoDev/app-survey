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
            'kode_dealer' => 'KNDNG2',
            'nama_dealer' => 'KONDANG MOTOR',
            'cabang' => 'SUKOHARJO'
        ]);
        $dealer = Dealereo::create([
            'kode_dealer' => 'TUNAS2',
            'nama_dealer' => 'TUNAS JAYA MOTOR',
            'cabang' => 'SUKOHARJO'
        ]);

        $dealer = Dealereo::create([
            'kode_dealer' => 'YMHDT2',
            'nama_dealer' => 'YAMAHA DETA KARTASURA',
            'cabang' => 'SUKOHARJO'
        ]);
    }
}
