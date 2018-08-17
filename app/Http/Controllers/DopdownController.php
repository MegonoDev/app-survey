<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DopdownController extends Controller
{
    public function getData()
    {
        $provinsi   = DB::table('provinsi')->pluck("nama","id_prov")->all();
        $locations  = DB::table('locations')->pluck("nama","id")->all();
        $organizers = DB::table('organizers')->pluck("nama","id")->all();
    	return view('frontend.pendaftaran',compact('provinsi', 'organizers', 'locations'));
    }

    public function selectKabupaten(Request $request)
    {
    	if($request->ajax()){
    		$kabupaten = DB::table('kabupaten')->where('id_prov', $request->id_prov)->pluck("nama","id_kab")->all();
    		$data      = view('frontend.ajax-kabupaten', compact('kabupaten'))->render();
    		return response()->json(['options'=>$data]);
    	}
    }

    public function selectDealereo(Request $request)
    {
    	if($request->ajax()){
    		$dealereo = DB::table('dealereos')->where('organizer_id', $request->organizer_id)->pluck("nama","id")->all();
    		$dataApi   = view('frontend.ajax-dealereo', compact('dealereo'))->render();
    		return response()->json(['options'=>$dataApi]);
    	}
    }
}
