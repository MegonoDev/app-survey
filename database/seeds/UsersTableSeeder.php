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
            'password' => bcrypt('password')
            ],
            [
            'name'     => 'Tegal',
            'email'    => 'tegal@test.com',
            'password' => bcrypt('password')
            ],
            [
            'name'     => 'Pekalongan',
            'email'    => 'pekalongan@test.com',
            'password' => bcrypt('password')
            ],
            [
            'name'     => 'Semarang',
            'email'    => 'semarang@test.com',
            'password' => bcrypt('password')
            ],
            [
            'name'     => 'Eonesia',
            'email'    => 'eonesia@test.com',
            'password' => bcrypt('password')
            ],
            [
            'name'     => 'Dinamika',
            'email'    => 'dinamika@test.com',
            'password' => bcrypt('password')
            ],
            [
            'name'     => 'Aria',
            'email'    => 'aria@test.com',
            'password' => bcrypt('password')
            ],   
        ]);
    }
}
