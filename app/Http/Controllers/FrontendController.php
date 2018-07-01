<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activitie;
use Illuminate\Support\Facades\DB;
use Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use App\Http\Requests\MemberRequest;
use Session;
use App\Member;

class FrontendController extends Controller
{
    public function event()
    {
        $this->apievent();
        $activities = Activitie::where('keterangan', 'tersedia')->get();
        return view('welcome', compact('activities'));
    }

    public function pendaftaran($slug)
    {
        $pendaftaran = Activitie::where('slug', $slug)->first();
        if ($pendaftaran == '') {
            return view('errors.404');
        } else {
            return view('frontend.pendaftaran', compact('pendaftaran'));
        }
    }

    public function apievent()
    {
        $date =  Carbon\Carbon::now()->format('y-m-d');
        $event = Activitie::where('finish_event', $date)->get();
        foreach ($event as $key => $value) {
                 $id = $value->id;
                 $finish_event = $value->finish_event;
                 if ($finish_event >= $date ) {
                    $activities = Activitie::find($id);
                    $keterangan = array(
                        'keterangan' => 'selesai',
                    );
                    $activities->update($keterangan);
                }
        }
    }
    public function registereonesia(MemberRequest $request)
    {
        $activitie_id = $request->activitie_id;
        $nama = $request->nama;
        $jenis_kelamin = $request->jenis_kelamin;
        $alamat = $request->alamat;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $handphone = $request->handphone;
        $nohp = str_replace(" ","",$handphone);
        if(!preg_match('/[^+0-9]/',trim($nohp))){
            // cek apakah no hp karakter 1-3 adalah +62
            if(substr(trim($nohp), 0, 1)!='0'){
                return redirect('/');
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif(substr(trim($nohp), 0, 1)=='0'){
                $hp = '62'.substr(trim($nohp), 1);
            }
        }

        $collection = collect(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 1, 2, 3, 4, 5, 6, 7, 8, 9]);
        $random = $collection->random(5);
        $random->all();
        $kode= preg_replace("/[^a-zA-Z0-9]/", "", $random);
        $status = $request->status;

        // smsgetway
//         $curl = curl_init();
// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://api.infobip.com/sms/1/text/single",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "POST",
//   CURLOPT_POSTFIELDS => " {\n   \"from\":\"Risa Creativindo\",\n   \"to\":\"$hp'\",\n   \"text\":\"kode pendaftaran event anda:$kode\"\n }",
//   CURLOPT_HTTPHEADER => array(
//     "accept: application/json",
//     "authorization: Basic UmlzYUNyZWF0aXZpbmRvOmVvbmVzaWExMjMkJA==",
//     "cache-control: no-cache",
//     "content-type: application/json",
//     "postman-token: c415e5cd-57c5-b553-ae64-e7ecafc6c60f"
//   ),
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }
        
        Member::create([
            'activitie_id'=>$activitie_id,
            'nama'=>$nama,
            'jenis_kelamin'=>$jenis_kelamin,
            'alamat'=>$alamat,
            'tempat_lahir'=>$tempat_lahir,            
            'tanggal_lahir'=>$tanggal_lahir,
            'handphone'=>$hp,
            'kode'=>$kode,
            'status'=>'Belum DI Verifikasi',
        ]);
        

        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<h4><i class="material-icons">done</i> Berhasil !</h4> Pendaftaran Event Anda Sukses.... <br> kode event di kirim 1x24 jam ke no handphone '.$handphone.' <br>jika kode tidak masuk ke no handphone anda silahkan hubungi admin.'
        ]);
        return redirect('/');
       
    }
}