<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Faker\Provider\DateTime;
use App\Dealereo;
use App\Role;

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
        for ($i=1; $i <= 20; $i++) {
            $members[] = [
                'nama'           => $faker->name,
                'jenis_kelamin'  => $faker->randomElement($array = array('pria', 'wanita')),
                'email'          => $faker->email,
                'alamat'         => $faker->address,
                'tempat_lahir'   => $faker->city,
                'tanggal_lahir'  => $faker->date,
                'handphone'      => $hp,
                'kode'           => mt_rand(10000, 99999),
                'status_verifikasi' => rand(0, 1),
                'perkawinan'    => $faker->randomElement($array = array('menikah', 'belum menikah', 'berpisah')),
                'pekerjaan'    => $faker->randomElement($array = array('pns', 'wiraswasta','ibu rumah tangga')),
                'kendaraan'     => $faker->randomElement($array = array('mio', 'vixion', 'jupiter mx', 'jupiter mx', 'R 15', 'R 25')),
                'motorbaru'     => $faker->randomElement($array = array('3 bulan kedepan', '6 bulan kedepan', '1 Tahunkedepan')),
                'id_kab'     => rand(1101, 1215),
                'operator_input'   => rand(2,7),
                'created_at'    => $faker->date,
            ];
        }
        DB::table('members')->insert($members);

    }
}
