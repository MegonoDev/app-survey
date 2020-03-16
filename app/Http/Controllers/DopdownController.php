<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DopdownController extends Controller
{
    public function getData()
    {
        $provinsi   = DB::table('provinsis')->pluck("nama", "id_prov")->all();
        return view('frontend.pendaftaran', compact('provinsi'));
    }

    public function selectKabupaten(Request $request)
    {
        if ($request->ajax()) {
            $kabupaten = DB::table('kabupatens')->where('id_prov', $request->id_prov)->pluck("nama", "id_kab")->all();
            $data      = view('frontend.ajax-kabupaten', compact('kabupaten'))->render();
            return response()->json(['options' => $data]);
        }
    }

    public function selectKecamatan(Request $request)
    {
        if ($request->ajax()) {
            $kecamatan = DB::table('kecamatans')->where('id_kab', $request->id_kab)->pluck("nama", "id_kec")->all();
            $data      = view('frontend.ajax-kecamatan', compact('kecamatan'))->render();
            return response()->json(['options' => $data]);
        }
    }

    public function selectKelurahan(Request $request)
    {
        if ($request->ajax()) {
            $kelurahan = DB::table('kelurahans')->where('id_kec', $request->id_kec)->pluck("nama", "id_kel")->all();
            $data      = view('frontend.ajax-kelurahan', compact('kelurahan'))->render();
            return response()->json(['options' => $data]);
        }
    }

    public function selectSales(Request $request)
    {
        if ($request->ajax()) {
            $sales = DB::table('users')
                ->where('dealereo_id', $request->dealereo_id)
                ->orderBy('namalengkap', 'ASC')
                ->pluck("namalengkap", "id")
                ->all();
            $data      = view('frontend.ajax-sales', compact('sales'))->render();
            return response()->json(['options' => $data]);
        }
    }
}
