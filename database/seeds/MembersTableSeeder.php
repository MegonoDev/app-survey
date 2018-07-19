<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Faker\Provider\DateTime;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->truncate();
        $faker  = Factory::create();
        
        $tgl    = date("Y-m-d");
        $hp     = 6282389492020;
        $jk     = 1;
        for ($i=1; $i <= 50; $i++) { 
            $members[] = [
                'nama'           => $faker->name,
                'jenis_kelamin'  => $jk,
                'email'          => $faker->email,
                'alamat'         => $faker->address,
                'tempat_lahir'   => $faker->city,
                'tanggal_lahir'  => $faker->date, 
                'handphone'      => $hp,
                'kode'           => mt_rand(10000, 99999),
                'status'         => rand(0, 1),
                'organizer_id'   => rand(1, 2),
                'dealereo_id'    => rand(1, 3),
                'location_id'    => rand(1, 3),
                'created_at'     => $faker->date, 
            ];
        }
        DB::table('members')->insert($members);
       
    }
}
