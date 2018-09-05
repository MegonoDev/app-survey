<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
class UsersTableSeeder extends Seeder

{

    public function run()
    {
        DB::table('users')->insert([
            [
            'namalengkap' => 'Super Admin',
            'name' => 'SuperAdmin',
            'email' => 'superadmin@admin.com',
            'role_id'    => '1',
            'dealereo_id'    => '1',
            'no_handphone' => '081234567890',
            'password' => bcrypt('password')
            ],
            [
            'namalengkap' => 'Admin Tegal',
            'name'     => 'AdminTegal',
            'email'    => 'tegal@test.com',
            'role_id'    => '2',
            'dealereo_id'    => '2',
            'no_handphone' => '081234567890',
            'password' => bcrypt('password')
            ],
            [
            'namalengkap' => 'Admin Pekalongan',
            'name'     => 'AdminPekalongan',
            'email'    => 'pekalongan@test.com',
            'role_id'    => '2',
            'dealereo_id'    => '3',
            'no_handphone' => '081234567890',
            'password' => bcrypt('password')
            ],
            [
            'namalengkap' => 'Admin Batang',
            'name'     => 'AdminBatang',
            'email'    => 'batang@test.com',
            'role_id'    => '2',
            'dealereo_id'    => '4',
            'no_handphone' => '081234567890',
            'password' => bcrypt('password')
            ],
            [
            'namalengkap' => 'Sales Tegal',
            'name'     => 'SalesTegal',
            'email'    => 'salestegal@test.com',
            'role_id'    => '3',
            'dealereo_id'    => '2',
            'no_handphone' => '081234567890',
            'password' => bcrypt('password')
            ],
            [
            'namalengkap' => 'Sales Pekalongan',
            'name'     => 'SalesPekalongan',
            'email'    => 'salespekalongan@test.com',
            'role_id'    => '3',
            'dealereo_id'    => '3',
            'no_handphone' => '081234567890',
            'password' => bcrypt('password')
            ],
            [
            'namalengkap'     => 'Sales Batang',
            'name'     => 'SalesBatang',
            'email'    => 'salesbatang@test.com',
            'role_id'    => '3',
            'dealereo_id'    => '4',
            'no_handphone' =>'081234567890',
            'password' => bcrypt('password')
            ],
        ]);
    }
}
