<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
class UsersTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Super Admin',
            'email' => 'superadmin@admin.com',
            'role_id'    => '1',
            'dealereo_id'    => '1',
            'no_handphone' => '081234567890',
            'password' => bcrypt('password')
            ],
            [
            'name'     => 'Tegal',
            'email'    => 'tegal@test.com',
            'role_id'    => '2',
            'dealereo_id'    => '2',
            'no_handphone' => '081234567890',
            'password' => bcrypt('password')
            ],
            [
            'name'     => 'Pekalongan',
            'email'    => 'pekalongan@test.com',
            'role_id'    => '2',
            'dealereo_id'    => '3',
            'no_handphone' => '081234567890',
            'password' => bcrypt('password')
            ],
            [
            'name'     => 'Batang',
            'email'    => 'batang@test.com',
            'role_id'    => '2',
            'dealereo_id'    => '4',
            'no_handphone' => '081234567890',
            'password' => bcrypt('password')
            ],
            [
            'name'     => 'Sales Tegal',
            'email'    => 'salestegal@test.com',
            'role_id'    => '3',
            'dealereo_id'    => '2',
            'no_handphone' => '081234567890',
            'password' => bcrypt('password')
            ],
            [
            'name'     => 'Sales Pekalongan',
            'email'    => 'salespekalongan@test.com',
            'role_id'    => '3',
            'dealereo_id'    => '3',
            'no_handphone' => '081234567890',
            'password' => bcrypt('password')
            ],
            [
            'name'     => 'Sales Batang',
            'email'    => 'salesbatang@test.com',
            'role_id'    => '3',
            'dealereo_id'    => '4',
            'no_handphone' =>'081234567890',
            'password' => bcrypt('password')
            ],
        ]);
    }
}
