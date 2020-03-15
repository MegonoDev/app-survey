<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Hadiah;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Member;

class HadiahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $members = Hadiah::where('is_hangus', 0)->paginate(15);
        $totalMember = $members->total();
        return view('backend.hadiah.index', compact('members', 'totalMember'));
    }

    public function undiPemenang(Request $request)
    {
        if ($request->has('go')) {

            $winner = DB::table('members')
                ->select('members.*', 'users.*','dealereos.*')
                ->join('users', 'users.id', '=', 'members.sales_id')
                ->join('dealereos', 'dealereos.id', '=', 'users.dealereo_id')
                ->whereNotIn('kode', function ($query) {
                    $query->select('kode')->from('hadiahs');
                })
                ->where('status_verifikasi', 1)
                ->inRandomOrder()
                ->first();
            $data = [
                'result' => $winner,
            ];
            return response()->json($data);
        } else {
            return 'bad parameter';
        }
    }

    public function storePemenang(Request $request)
    {
        $data = $request->all();
        if ($data) {
            Hadiah::create($data);
        }
        $result = [
            'success' => 'ok',
            'result' => $data
        ];
        return response()->json($result);
    }

    public function allPemenang(Request $request)
    {

        if ($request->has('go')) {

            $data = Member::verified()->inRandomOrder();
            if (count($data->get()) > 20) {
                $data =  $data->limit(20)->get();
            } else {
                $data =  $data->get();
            }
            $result = [
                'success' => 'ok',
                'result' => $data
            ];
            return response()->json($result);
        }
    }
}
