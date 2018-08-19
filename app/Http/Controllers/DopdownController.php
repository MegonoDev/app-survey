<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DopdownController extends Controller
{
    public function getData()
    {
        $provinsi   = DB::table('provinsis')->pluck("nama","id_prov")->all();
    	return view('frontend.pendaftaran',compact('provinsi'));
    }

    public function selectKabupaten(Request $request)
    {
    	if($request->ajax()){
    		$kabupaten = DB::table('kabupatens')->where('id_prov', $request->id_prov)->pluck("nama","id_kab")->all();
    		$data      = view('frontend.ajax-kabupaten', compact('kabupaten'))->render();
    		return response()->json(['options'=>$data]);
    	}
    }
}
