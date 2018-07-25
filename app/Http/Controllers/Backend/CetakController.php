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
use App\Exports\PdfExport;
use PDF;


class CetakController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cetakLaporanExcel()
    {
        return view('backend.cetak.excel');
    }

    public function cetakLaporanPostExcel(Request $request)
    {
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun');
        $filename = 'Laporan Data Member '.$bulan.'-'.$tahun;
        $role = $this->lihatId();
        $dealereo_id = $role['0'];
        if (Auth::user()->id == 1) {
        // $members = Member::whereMonth('created_at', $bulan)
        //                  ->whereYear('created_at', $tahun)
        //                  ->get();
        $members = Member::all();
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
            return view('backend.cetak.excel');
        } else {
            Session::flash('flash_notification', [
                'level'=>'success',
                'message'=>'<i class="fa fa-check"></i> Data Member Bulan '.$bulan.' Tahun '.$tahun.' Berhasil di Download'
            ]);
            return Excel::download(new DataExport($members), $filename.'.xls'); 
        }   
    
    }

    public function cetakLaporanPdf()
    {
        return view('backend.cetak.pdf');
    }

    public function cetakLaporanPostPdf(Request $request)
    {
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun');
        $filename = 'Laporan Data Member '.$bulan.'-'.$tahun;
        $role = $this->lihatId();
        $dealereo_id = $role['0'];
        if (Auth::user()->id == 1) {
        $members = Member::all();
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
            return view('backend.cetak.pdf');
        } else {
            Session::flash('flash_notification', [
                'level'=>'success',
                'message'=>'<i class="fa fa-check"></i> Data Member Bulan '.$bulan.' Tahun '.$tahun.' Berhasil di Download'
            ]);
            $pdf = PDF::loadView('backend.cetak.pdf-laporan', compact('members'));
            return $pdf->setPaper('legal', 'landscape')->download($filename.'.pdf');
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
