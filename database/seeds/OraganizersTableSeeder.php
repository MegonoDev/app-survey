<?php

use Illuminate\Database\Seeder;
use App\Organizer;
use App\Dealereo;
use App\Location;
class OraganizersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $org = Organizer::create(['nama' => 'Dealer']);
        $dea = Dealereo::create(['nama' => 'YAMAHA AGUNG TEGAL', 
                                 'organizer_id' => '1',
                                 'role_id' => '2']);
        $dea = Dealereo::create(['nama' => 'YAMAHA AGUNG PEKALONGAN', 
                                 'organizer_id' => '1',
                                 'role_id' => '3']);
        $dea = Dealereo::create(['nama' => 'YAMAHA AGUNG SEMARANG', 
                                 'organizer_id' => '1',
                                 'role_id'=> '4']);

        $org  = Organizer::create(['nama' => 'Eo']);
        $eo  = Dealereo::create(['nama' => 'EONESIa', 
                                 'organizer_id' => '2',
                                 'role_id' => '3']);
        $eo  = Dealereo::create(['nama' => 'DINAMIKA', 
                                 'organizer_id' => '2',
                                 'role_id' => '2']);
        $eo  = Dealereo::create(['nama' => 'ARIA', 
                                 'organizer_id' => '2',
                                 'role_id' => '4']);
        
        $alamat = Location::create(['nama' => 'jl.Sudirman Tegal']);
        $alamat = Location::create(['nama' => 'jl.Sudirman Pekalongan']);
        $alamat = Location::create(['nama' => 'jl.Sudirman Semarang']);

        
    }
}
