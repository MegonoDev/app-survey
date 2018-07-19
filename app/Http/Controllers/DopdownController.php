<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DopdownController extends Controller
{
    public function getData()
    {
		$organizers = DB::table('organizers')->pluck("nama","id")->all();
		$locations  = DB::table('locations')->pluck("nama","id")->all();
    	return view('frontend.pendaftaran',compact('organizers', 'locations'));
    }

    public function selectAjax(Request $request)
    {
    	if($request->ajax()){
    		$states = DB::table('dealereos')->where('organizer_id',$request->organizer_id)->pluck("nama","id")->all();
    		$data = view('frontend.ajax-dealereo',compact('states'))->render();
    		return response()->json(['options'=>$data]);
    	}
    }
}
