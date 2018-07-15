<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use Session;

class VerifikasiController extends Controller
{
    public function getkode(Request $request)
    {
        $kode = $request->get('kode');
        $getKode = Member::where('kode', $kode)->get();
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
}
