<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use GuzzleHttp\Client;
use App\Http\Requests\MemberRequest;
use Session;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $members = Member::all();
        dd($members);

        // return view('backend.member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('backend.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
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
            if(substr(trim($nohp), 0, 3)=='+62'){
                $hp = trim($nohp);
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif(substr(trim($nohp), 0, 1)=='0'){
                $hp = '+62'.substr(trim($nohp), 1);
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
//   CURLOPT_POSTFIELDS => " {\n   \"from\":\"Risa Creativindo\",\n   \"to\":\"6282389492020\",\n   \"text\":\"TEST adsadsasa\"\n }",
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
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Register Anda Sukses kode event di kirim ke no handphone '.$hp.' jika kode dikirim ke nohandphone silahkan hubungi admin.'
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getkode(Request $request)
    {
        $kode = $request->get('kode');
        $data = Member::where('kode', $kode)->get();
        return view('search', compact('data'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $members = Member::find($id);
        $nama = $request->nama;
        $kode = $request->kode;
        $data    = $request->only(['status']);
        $members -> update($data);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'Kode : '.$kode.' <br> Nama : '.$nama.'<br> Berhasil di Verifikasi</h4>'
        ]);
        return redirect(route('event.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
