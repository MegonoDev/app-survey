<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Hadiah;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HadiahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $members = Hadiah::where('is_hangus', 0)->paginate(15);
        $totalMember = count($members);
        return view('backend.hadiah.index', compact('members', 'totalMember'));
    }

    public function undiPemenang(Request $request)
    {
        if ($request->has('go')) {

            $winner = DB::table('members')
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
}
