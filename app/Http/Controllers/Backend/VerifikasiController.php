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
        $getKode = $this->userCheckKode($request);
        if (count($getKode) == 0) {
           Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'Kode : '.$request->kode.' Tidak Ada'
         ]);
        return redirect()->back();
        }
        return view('search', compact('getKode'));
    }

    public function verifikasiKode(Request $request)
    {
        $id = $request->id;
        $members = Member::find($id);
        $data    = $request->only(['status_verifikasi']);
        $members->update($data);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'Kode : '.$request->kode.' <br> Nama : '.$request->nama.'<br> Berhasil di Verifikasi</h4>'
        ]);
        return redirect(route('customers.index'));
    }

    public function userCheckKode($request)
    {
        $kode = $request->kode;
        $role = Auth::user()->role_id;
        $sales = Auth::user()->id;
        if ($role == 1) {
            $members = Member::where('kode', $kode)->get();;
        } elseif($role == 2) {
            $members = Member::where('kode', $kode)->where('operator_input', $role)->get();
        } elseif ($role == 3) {
            $members = Member::where('kode', $kode)->where('operator_input', $sales)->get();
        }
        return $members;

    }

}
