<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Hadiah;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HadiahController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $members = Hadiah::paginate(15);
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
                ->where('status_verifikasi',1)
                ->inRandomOrder()
                ->first();
                if($winner){
                    Hadiah::create(['member_id'=>$winner->id,'kode'=>$winner->kode]);
                }
            $data = [
                'result' => $winner,
            ];
            return response()->json($data);
        }
    }
}
