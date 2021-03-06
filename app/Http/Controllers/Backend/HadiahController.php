<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\HadiahRequest;
use App\Hadiah;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Member;

use Session;

class HadiahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $members = Hadiah::nothangus()->latest()->paginate(15);
        $totalMember = $members->total();
        return view('backend.hadiah.index', compact('members', 'totalMember'));
    }

    public function undiPemenang(Request $request)
    {
        if ($request->has('go')) {

            $winner = DB::table('members')
                ->select('members.*', 'users.namalengkap', 'dealereos.nama_dealer')
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

    public function storePemenang(HadiahRequest $request)
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
    public function edit($id)
    {
        $hadiah = Hadiah::findOrFail($id);
        return view('backend.hadiah.edit', compact('hadiah'));
    }
    public function update(HadiahRequest $request, $id)
    {
        $update = Hadiah::findOrFail($id);
        $data = $request->all();
        $data['kode'] = $update->kode; //prevent of inject
        $data['member_id'] = $update->member_id;
        $update->update($data);
        Session::flash('flash_notification', [
            'level' => 'success',
            'message' => '<i class="fa fa-check"></i>Pemenang ' . $update->member->nama . ' Berhasil Di Update'
        ]);
        return redirect(route('hadiah.index'));
    }

    public function destroy($id)
    {
        $delete = Hadiah::findOrFail($id);
        $delete->delete();
        Session::flash('flash_notification', [
            'level' => 'danger',
            'message' => '<i class="fa fa-check"></i>' . $delete->member->nama . ' Berhasil Di Hapus'
        ]);
        return redirect(route('hadiah.index'));
    }
}
