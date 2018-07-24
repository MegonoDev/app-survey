<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use Session;
use Auth;
use App\Dealereo;

class VerifikasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getkode(Request $request)
    {
        $kode = $request->kode;
        $role_id = $this->lihatId();
        if (Auth::user()->id == 1) {
        $getKode = Member::where('kode', $kode)
                        ->get();
                if(count($getKode) == ""){
                    Session::flash('flash_notification', [
                        'level'=>'danger',
                        'message'=>'Kode : '.$request->kode.' Tidak Ada Silahkan Cek Kembali</h4>'
                    ]);
                    return back();
                }
        } else {
        $getKode = Member::where('kode', $kode)
                        ->where('dealereo_id', $role_id)
                        ->get();
                        if(count($getKode) == ""){
                        Session::flash('flash_notification', [
                            'level'=>'danger',
                            'message'=>'Kode : '.$request->kode.' Tidak Ada Silahkan Cek Kembali</h4>'
                        ]);
                            return back();
                        }
        }
        return view('search', compact('getKode'));
    }

    public function verifikasiKode(Request $request)
    {
        $id = $request->id;
        $members = Member::find($id);
        $data    = $request->only(['status']);
        $members->update($data);    
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'Kode : '.$request->kode.' <br> Nama : '.$request->nama.'<br> Berhasil di Verifikasi</h4>'
        ]);
        return redirect(route('member.index'));
    }

    public function lihatId()
    {
        $role_id = Auth::user()->roles->implode('id');
        $data = Dealereo::where('role_id', $role_id)->get();
        foreach ($data as $key => $value) {
            $id = $value->members->pluck('dealereo_id');
        return $id;
        }
    }
}
