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
        return view('welcome');
    }

    public function registerTestdrive(MemberRequest $request)
    {
		$data = $request->except('handphone', 'status');
		$data['kode'] = $this->makeKode();
		$data['status'] = 0;
		if(isset($request->handphone)){
			$nohp = str_replace(" ","",$request->handphone);
            if(!preg_match('/[^+0-9]/',trim($nohp))){
             if(substr(trim($nohp), 0, 1)!='0'){
                return redirect('/');
                }
             elseif(substr(trim($nohp), 0, 1)=='0'){
				$hp = '62'.substr(trim($nohp), 1);
				$data['handphone'] = $hp;
				}
			}
		}  
        
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
		 Member::create($data);
         Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<h4><i class="material-icons">check</i> Berhasil !</h4>Pendaftaran Test Drive.... <br> kode di kirim 1x24 jam ke no handphone '.$request->handphone.' <br>jika kode tidak terkirim ke no handphone anda silahkan hubungi admin.'
        ]);
        return redirect('/');
       
	}
	
	public function makeKode()
	{
			$collection = collect(['A', 2, 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 
								   'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 
								   'a','b','c','d',6,'f',9,'h','i','j','k','l','m','n','o','p',
								   'q','r','s','t','u','v','w','x','y','z',
								   1, 'B', 3, 4, 5, 'e', 7, 8, 'g']);
            $random = $collection->random(5);
            $random->all();
			$kode = preg_replace("/[^a-zA-Z0-9]/", "", $random);
			return $kode;	
	}
}