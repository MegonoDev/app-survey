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
use App\Repositories\Mailing;

class FrontendController extends Controller
{

    public function __construct()
    {
        $this->sendMail = new Mailing();
    }
    public function event()
    {
        return view('welcome');
    }

    public function registerTestdrive(MemberRequest $request)
    {
        $data = $request->all();
        $data['kode'] = $this->makeKode();
        $kode = $this->makeKode();
        $data['status_verifikasi'] = 0;
        // $data['kendaraan'] = implode(",", $request->kendaraan);
        $data['tanggal_lahir'] = date('Y-m-d', strtotime($request->tanggal_lahir));
        $data['operator_input'] = 2;
        // $data['dealereo_id'] = (int)$request->get('dealereo_id');
        // $data['sales_id'] = (int)$request->get('sales_id');
        if (isset($request->handphone)) {
            $nohp = str_replace(" ", "", $request->handphone);
            if (!preg_match('/[^+0-9]/', trim($nohp))) {
                if (substr(trim($nohp), 0, 1) != '0') {
                    return redirect('/');
                } elseif (substr(trim($nohp), 0, 1) == '0') {
                    $hp = '62' . substr(trim($nohp), 1);
                    $data['handphone'] = $hp;
                }
            }
        }

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.infobip.com/sms/1/text/single",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => " {\n   \"from\":\"EONESIA\",\n   \"to\":\"$hp'\",\n   \"text\":\"Terima Kasih Telah Registrasi. Simpan Kode Registrasi Anda $kode. Untuk Melihat Produk Terbaru Klik Link : https://www.yamaha-motor.co.id/product/lexi-s\"\n }",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "authorization: Basic UmlzYUNyZWF0aXZpbmRvOmVvbmVzaWExMjMkJA==",
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: c415e5cd-57c5-b553-ae64-e7ecafc6c60f"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        $this->sendMail->sendCode($data);
        Member::create($data);
        // Session::flash('flash_notification', [
        //     'level' => 'success',
        //     'message' => '<h4><i class="material-icons">check</i> Berhasil !</h4>Terima Kasih Telah Registrasi...<br> kode di kirim 1x24 jam ke no handphone ' . $request->handphone . ' <br>jika kode tidak terkirim ke no handphone anda silahkan hubungi admin.'
        // ]);

        return redirect()->route('successful-register');
    }

    public function successfulRegister()
    {
        return view('frontend.success');
    }
    public function verifikasiByUrl($kode)
    {
        $member = Member::where('kode', $kode)->first();
        $data    = ['status_verifikasi' => '1'];
        if($member){
        $member->update($data);
        return redirect('https://yamaha-motor.co.id');
        }else{
            return redirect('/');
        }
    }

    public function makeKode()
    {
        $collection = collect([
            'A', 2, 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M',
            'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
            'a', 'b', 'c', 'd', 6, 'f', 9, 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p',
            'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            1, 'B', 3, 4, 5, 'e', 7, 8, 'g'
        ]);
        $random = $collection->random(5);
        $random->all();
        $kode = preg_replace("/[^a-zA-Z0-9]/", "", $random);
        return $kode;
    }
}
