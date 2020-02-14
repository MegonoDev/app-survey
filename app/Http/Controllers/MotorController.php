<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MotorController extends Controller
{
    public function selectSeri(Request $request)
    {
    	if($request->ajax()){
    		$seri = DB::table('seri')->where('id_merk', $request->id_merk)->pluck("nama","id_seri")->all();
    		$data      = view('frontend.ajax-seri', compact('seri'))->render();
    		return response()->json(['options'=>$data]);
        }
    }
}
