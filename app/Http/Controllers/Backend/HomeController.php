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

    public function index(Request $request)
    {
        $groupby = $request->has('groupby') ? $request->groupby : 'year';
        $type    = $request->has('type') ? $request->type : 'bar';

        $chart = $this->chart($type, 'Data member with '.$type);

        switch ($groupby) {
            case 'year':
                $chart->groupByYear(10);
                break;
            case 'gender':
                $chart->groupBy('jenis_kelamin');
                break;
            case 'profesi':
                $chart->groupBy('pekerjaan');
                break;

            default:
                $chart->groupByYear(10);
                break;
        }
        return view('home', compact('chart'));
    }

    public function chart($jenis, $judul)
    {
        return Charts::database(Member::all(), $jenis, 'highcharts')
            ->title($judul)
            ->template("material")
            ->elementLabel("Total")
            ->dimensions(400, 400)
            ->responsive(true);
    }
}
