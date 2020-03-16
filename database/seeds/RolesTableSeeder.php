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
            'kode_dealer' => 'PUM',
            'nama_dealer' => 'PUTRA UTAMA MOTOR',
            'cabang' => 'SUKOHARJO'
        ]);
        $dealer = Dealereo::create([
            'kode_dealer' => 'KM',
            'nama_dealer' => 'KONDANG MOTOR',
            'cabang' => 'SUKOHARJO'
        ]);
        $dealer = Dealereo::create([
            'kode_dealer' => 'TJM',
            'nama_dealer' => 'TUNAS JAYA MOTOR',
            'cabang' => 'SUKOHARJO'
        ]);

        $dealer = Dealereo::create([
            'kode_dealer' => 'YDK',
            'nama_dealer' => 'YAMAHA DETA KARTASURA',
            'cabang' => 'SUKOHARJO'
        ]);

        $dealer = Dealereo::create([
            'kode_dealer' => 'SBR1',
            'nama_dealer' => 'SUMBER BARU REJEKI SRATEN 1',
            'cabang' => '-'
        ]);

        $dealer = Dealereo::create([
            'kode_dealer' => 'SBR2',
            'nama_dealer' => 'SUMBER BARU REJEKI SRATEN 2',
            'cabang' => '-'
        ]);

        $dealer = Dealereo::create([
            'kode_dealer' => 'TBS',
            'nama_dealer' => 'SUMBER BARU REJEKI TBS',
            'cabang' => '-'
        ]);
    }
}
