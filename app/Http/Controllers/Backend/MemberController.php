<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use GuzzleHttp\Client;
use App\Http\Requests\MemberRequest;

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
        $members = Member::paginate(10);
        return view('backend.member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.member.create');
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
        $collection = collect(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 1, 2, 3, 4, 5, 6, 7, 8, 9]);
        $random = $collection->random(5);
        $random->all();
        $kode= preg_replace("/[^a-zA-Z0-9]/", "", $random);
        $status = $request->status;

        // smsgetway
        $userkey = "bo7tye"; //userkey lihat di zenziva
        $passkey = "kurniawanDev"; // set passkey di zenziva
        $telepon = $handphone;
        $message = "Terima Kasih, pendaftaran event nama $nama Berhasil. kode event : $kode";
        $url = "https://reguler.zenziva.net/apps/smsapi.php";
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        $results = curl_exec($curlHandle);
        curl_close($curlHandle);
        
        Member::create([
            'activitie_id'=>$activitie_id,
            'nama'=>$nama,
            'jenis_kelamin'=>$jenis_kelamin,
            'alamat'=>$alamat,
            'tempat_lahir'=>$tempat_lahir,            
            'tanggal_lahir'=>$tanggal_lahir,
            'handphone'=>$handphone,
            'kode'=>$kode,
            'status'=>'Belum DI Verifikasi',
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
        $data       = $request->only(['status']);
        $members -> update($data);
        return redirect('home');
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
