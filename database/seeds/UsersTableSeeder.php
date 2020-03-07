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
            // [
            //     'namalengkap' => 'Super Admin',
            //     'name' => 'SuperAdmin',
            //     'email' => 'superadmin@admin.com',
            //     'role_id'    => '1',
            //     'dealereo_id'    => '1',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap' => 'JOKO SAPUTRO',
            //     'name'     => 'JOKOSAPUTRO',
            //     'email'    => 'JOKOSAPUTRO@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '2',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap' => 'MAULIDIAH IKA SUWARI',
            //     'name'     => 'MAULIDIAHIKASUWARI',
            //     'email'    => 'MAULIDIAHIKASUWARI@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '2',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap' => 'YEYEN ISNANI ADITYA',
            //     'name'     => 'YEYENISNANIADITYA',
            //     'email'    => 'YEYENISNANIADITYA@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '2',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap' => 'BENNY NURIYANTO',
            //     'name'     => 'BENNYNURIYANTO',
            //     'email'    => 'BENNYNURIYANTO@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '2',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap' => 'PARNO',
            //     'name'     => 'PARNO',
            //     'email'    => 'PARNO@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '2',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'DWI YANTI',
            //     'name'     => 'DWIYANTI',
            //     'email'    => 'DWIYANTI@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '2',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'SURATNO',
            //     'name'     => 'SURATNO',
            //     'email'    => 'SURATNO@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '2',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'JERRY PRATAMA',
            //     'name'     => 'JERRYPRATAMA',
            //     'email'    => 'JERRYPRATAMA@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '2',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'AGUS PRIYATNO',
            //     'name'     => 'AGUSPRIYATNO',
            //     'email'    => 'AGUSPRIYATNO@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '2',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'YOGA BAREB MURDOKO',
            //     'name'     => 'YOGABAREBMURDOKO',
            //     'email'    => 'YOGABAREBMURDOKO@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '2',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'SLAMET',
            //     'name'     => 'SLAMET ',
            //     'email'    => 'SLAMET@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '2',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],

            // //=============================== end of OBOH02 =============================//


            // [
            //     'namalengkap'     => 'TEDI',
            //     'name'     => 'TEDI ',
            //     'email'    => 'TEDI@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '3',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'FRENGKI',
            //     'name'     => 'FRENGKI',
            //     'email'    => 'FRENGKI@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '3',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'YUDI',
            //     'name'     => 'YUDI',
            //     'email'    => 'YUDI@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '3',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'JATI',
            //     'name'     => 'JATI',
            //     'email'    => 'JATI@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '3',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'TRIYANTO',
            //     'name'     => 'TRIYANTO',
            //     'email'    => 'TRIYANTO@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '3',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'ASNAR',
            //     'name'     => 'ASNAR',
            //     'email'    => 'ASNAR@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '3',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'DWIWIT',
            //     'name'     => 'DWIWIT',
            //     'email'    => 'DWIWIT@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '3',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'GALUH',
            //     'name'     => 'GALUH',
            //     'email'    => 'GALUH@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '3',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'BUDI',
            //     'name'     => 'BUDI',
            //     'email'    => 'BUDI@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '3',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'AGUS',
            //     'name'     => 'AGUS',
            //     'email'    => 'AGUS@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '3',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'IDA',
            //     'name'     => 'IDA',
            //     'email'    => 'IDA@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '3',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'JOKOPRAS',
            //     'name'     => 'JOKOPRAS',
            //     'email'    => 'JOKOPRAS@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '3',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],

            // //================================== end of kondang motor =================/
            // [
            //     'namalengkap'     => 'FITRA BLINK',
            //     'name'     => 'FITRABLINK',
            //     'email'    => 'FITRABLINK@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'ANTOK SAPUTRA',
            //     'name'     => 'ANTOKSAPUTRA',
            //     'email'    => 'ANTOKSAPUTRA@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'NANANG',
            //     'name'     => 'NANANG',
            //     'email'    => 'NANANG@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'WAHYU',
            //     'name'     => 'WAHYU',
            //     'email'    => 'WAHYU@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'ANGGA',
            //     'name'     => 'ANGGA',
            //     'email'    => 'ANGGA@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'DWI RUSLAN',
            //     'name'     => 'DWIRUSLAN',
            //     'email'    => 'DWIRUSLAN@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'EDI TILANG',
            //     'name'     => 'EDITILANG',
            //     'email'    => 'EDITILANG@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'NOVIA',
            //     'name'     => 'NOVIA',
            //     'email'    => 'NOVIA@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'NIA FUJI',
            //     'name'     => 'NIAFUJI',
            //     'email'    => 'NIAFUJI@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'HARYANTO',
            //     'name'     => 'HARYANTO',
            //     'email'    => 'HARYANTO@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'IHSAN',
            //     'name'     => 'IHSAN',
            //     'email'    => 'IHSAN@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'EGYARI',
            //     'name'     => 'EGYARI',
            //     'email'    => 'EGYARI@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // // end of sales TJM =========
            // [
            //     'namalengkap'     => 'HERI WIGUNAWAN',
            //     'name'     => 'HERIWIGUNAWAN',
            //     'email'    => 'HERIWIGUNAWAN@test.com',
            //     'role_id'    => '2',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'ABDUL RAZAK',
            //     'name'     => 'ABDULRAZAK',
            //     'email'    => 'ABDULRAZAK@test.com',
            //     'role_id'    => '2',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'SUGIYARTO',
            //     'name'     => 'SUGIYARTO',
            //     'email'    => 'SUGIYARTO@test.com',
            //     'role_id'    => '2',
            //     'dealereo_id'    => '4',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // //======================== end of TJM ==================//

            // [
            //     'namalengkap'     => 'SUMANTO',
            //     'name'     => 'SUMANTO',
            //     'email'    => 'SUMANTO@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '5',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'AHMAD NUR HIDAYAT',
            //     'name'     => 'AHMADNURHIDAYAT',
            //     'email'    => 'AHMADNURHIDAYAT@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '5',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'MUHAMMAD SOLIKHIN',
            //     'name'     => 'MUHAMMADSOLIKHIN',
            //     'email'    => 'MUHAMMADSOLIKHIN@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '5',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            // [
            //     'namalengkap'     => 'DANI OCTABRIANTO',
            //     'name'     => 'DANIOCTABRIANTO',
            //     'email'    => 'DANIOCTABRIANTO@test.com',
            //     'role_id'    => '3',
            //     'dealereo_id'    => '5',
            //     'no_handphone' => '081234567890',
            //     'password' => bcrypt('password')
            // ],
            //================ end of diler 5 ===================//


            [
                'namalengkap'     => 'ALIF',
                'name'     => 'ALIF',
                'email'    => 'ALIF@test.com',
                'role_id'    => '3',
                'dealereo_id'    => '6',
                'no_handphone' => '081234567890',
                'password' => bcrypt('password')
            ],
            //=========================== end of diler 6 ===============//


            [
                'namalengkap'     => 'SYABAN',
                'name'     => 'SYABAN',
                'email'    => 'SYABAN@test.com',
                'role_id'    => '3',
                'dealereo_id'    => '7',
                'no_handphone' => '081234567890',
                'password' => bcrypt('password')
            ],

            [
                'namalengkap'     => 'RANI',
                'name'     => 'RANI',
                'email'    => 'RANI@test.com',
                'role_id'    => '3',
                'dealereo_id'    => '7',
                'no_handphone' => '081234567890',
                'password' => bcrypt('password')
            ],

            //================== end of diler 7 ===========//
            [
                'namalengkap'     => 'ZULI',
                'name'     => 'ZULI',
                'email'    => 'ZULI@test.com',
                'role_id'    => '3',
                'dealereo_id'    => '8',
                'no_handphone' => '081234567890',
                'password' => bcrypt('password')
            ],

            [
                'namalengkap'     => 'ZULI',
                'name'     => 'ZULI',
                'email'    => 'ZULI@test.com',
                'role_id'    => '3',
                'dealereo_id'    => '8',
                'no_handphone' => '081234567890',
                'password' => bcrypt('password')
            ],

            [
                'namalengkap'     => 'AFIS',
                'name'     => 'AFIS',
                'email'    => 'AFIS@test.com',
                'role_id'    => '3',
                'dealereo_id'    => '8',
                'no_handphone' => '081234567890',
                'password' => bcrypt('password')
            ],
        ]);
    }
}
