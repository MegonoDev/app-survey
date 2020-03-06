<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use GuzzleHttp\Client;
use App\Http\Requests\MemberRequest;
use Session;
use Auth;
use App\User;
use DB;
use App\Dealereo;
use App\Repositories\Mailing;

class MemberController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->sendMail = new Mailing();
    }

    public function index()
    {
        $members = $this->userCheckMember();
        $totalMember = count($members);
        return view('backend.member.index', compact('members', 'totalMember'));
    }

    public function detailCustomer($kode)
    {
        $details = Member::where('kode', $kode)->get();
        return view('backend.member.detail', compact('details'));
    }


    public function create()
    {
        $user = Auth::user();
        $provinsi   = DB::table('provinsis')->pluck("nama", "id_prov")->all();
        $sales = DB::table('users')
            ->orderBy('namalengkap', 'asc')
            ->join('dealereos', 'dealereos.id', '=', 'users.dealereo_id')
            ->selectRaw("CONCAT(namalengkap,' - ',dealereos.nama_dealer) as namafull,users.id")
            ->where('role_id', '3')
            ->pluck("namafull", "users.id")
            ->all();
        return view('backend.member.create', compact('provinsi', 'sales','user'));
    }

    public function store(MemberRequest $request)
    {
        $data = $request->all();
        $data['kode'] = $this->makeKode();
        $kode = $this->makeKode();
        $data['status_verifikasi'] = 0;
        $data['tanggal_lahir'] = date('Y-m-d', strtotime($request->tanggal_lahir));
        $data['operator_input'] = 2;
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
        Session::flash('flash_notification', [
            'level' => 'success',
            'message' => '<h4><i class="material-icons">check</i> Berhasil !</h4>Terima Kasih Telah Registrasi...<br> kode di kirim 1x24 jam ke no handphone ' . $request->handphone . ' <br>jika kode tidak terkirim ke no handphone anda silahkan hubungi admin.'
        ]);
        return redirect(route('customers.index'));
    }

    public function userCheckMember()
    {
        $role = Auth::user()->role_id;
        $sales = Auth::user()->id;
        if ($role == 1) {
            $members = Member::latest()->paginate(10);
        } elseif ($role == 2) {
            $members = Member::where('operator_input', '2')->latest()->paginate(10);
        } elseif ($role == 3) {
            $members = Member::where('sales_id', $sales)->latest()->paginate(10);
        }
        return $members;
    }

    public function kabupatenSelect(Request $request)
    {
        if ($request->ajax()) {
            $kabupaten = DB::table('kabupatens')->where('id_prov', $request->id_prov)->pluck("nama", "id_kab")->all();
            $data      = view('backend.member.kabupaten', compact('kabupaten'))->render();
            return response()->json(['options' => $data]);
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

    public function operatorInput()
    {
        $role = Auth::user()->role_id;
        $sales = Auth::user()->id;
        if ($role == 3) {
            $operator = $sales;
        } else {
            $operator = 2;
        }
        return $operator;
    }
}
