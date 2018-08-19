<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dealereo;
use App\Member;
use Auth;
use DB;
use Charts;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
}
