<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dealereo;
use App\Member;
use Auth;
use DB;
use Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $chartbar = Charts::database(Member::all(), 'bar', 'highcharts')
    ->title('Data Member Pertahun')
    ->elementLabel("Total")
    ->dimensions(500, 500)
    ->responsive(true)
    ->groupByYear(10);
 

    $chartpie = Charts::database(Member::all(), 'pie', 'highcharts')
    ->title("Data Member Pertahun")
    ->dimensions(500, 500)
    ->responsive(true)
    ->groupByYear(10);
    return view('home',compact('chartbar', 'chartpie'));
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

    public function lihatNama()
    {
        // $role_id = Auth::user()->roles->implode('id');
        $data = Dealereo::all();
        foreach ($data as $key => $value) {
            $nama = $value->pluck('nama');
        }
         return $nama;
        
    }
}
