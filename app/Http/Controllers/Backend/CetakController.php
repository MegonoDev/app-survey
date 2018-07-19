<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use App\Dealereo;
use Session;
use Auth;
use Excel;
use App\Exports\DataExport;


class CetakController extends Controller
{
    
    public function cetakLaporan()
    {
        return view('backend.cetak.index');
    }
    public function cetakLaporanPost(Request $request)
    {
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun');
        $filename = 'Laporan Data Member '.$bulan.'-'.$tahun;
        $role = $this->lihatId();
        $dealereo_id = $role['0'];
        if (Auth::user()->id == 1) {
        $members = Member::whereMonth('created_at', $bulan)
                         ->whereYear('created_at', $tahun)
                         ->get();
        } else {
        $members = Member::whereMonth('created_at', $bulan)
                        ->whereYear('created_at', $tahun)
                        ->where('dealereo_id', $dealereo_id)
                        ->get();
        }
        if (count($members) == "") {
            Session::flash('flash_notification', [
                'level'=>'danger',
                'message'=>'<i class="fa fa-check"></i> Data Member Bulan '.$bulan.' Tahun '.$tahun.' Tidak Ada'
            ]);
            return view('backend.cetak.index');
        } else {
            Session::flash('flash_notification', [
                'level'=>'success',
                'message'=>'<i class="fa fa-check"></i> Data Member Bulan '.$bulan.' Tahun '.$tahun.' Berhasil di Download'
            ]);
            return Excel::download(new DataExport($members), $filename.'.xls');
        }   
    
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
