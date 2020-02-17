<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Member;
use App\Charts\DataMember;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;

class ChartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAllYear()
    {

        return Member::select(DB::raw("Year(created_at) as year"))
                ->orderBy(DB::raw("Year(created_at)"), 'ASC')->distinct()->pluck('year');
    }    
    public function getAllProffession()
    {
        return Member::select('pekerjaan')
                ->orderBy('pekerjaan', 'ASC')->distinct()->pluck('pekerjaan');
    }  

    public function memberTahun()
    {
        return Member::select(DB::raw("COUNT(*) as data"))
                    ->groupBy(DB::raw("Year(created_at)"))
                    ->pluck('data');
    }

    public function memberTahunAjax(Request $request)
    {
        $year = $request->has('year') ? $request->year : date('Y');
        $result = Member::select(DB::raw("COUNT(*) as created"))
        ->whereYear('created_at',$year)
        ->groupBy(DB::raw("Year(created_at)"))
        ->pluck('data');

        return response()->json($result);
}
    

    public function memberBulan()
    {
        $year = date('Y');
        return Member::select(\DB::raw("COUNT(*) as data"))
                    ->whereYear('created_at', $year)
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('data');
        
    return Charts::database(Member::all(), 'bar', 'highcharts')
    ->title('Data Member Pertahun')
    ->elementLabel("Total")
    ->dimensions(500, 500)
    ->responsive(true)
    ->groupByYear(10);
    }
    public function memberBulanAjax(Request $request)
    {
        // dd($request);
        $year = $request->has('year') ? $request->year : date('Y');
        $month =  DB::table('members')->select(DB::raw("Month(created_at) as month"))
        ->whereYear('created_at',$year)
        ->orderBy(DB::raw("Month(created_at)"), 'ASC')->distinct()->pluck('month');

        $data = Member::select(\DB::raw("COUNT(*) as data"))
                    ->whereYear('created_at', $year)
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('data');
                    $value = [];

        $response = [ 
                      'labels'=> $month,
                      'values'=> $data
                    ];
        
    }

    public function memberJekel()
    {
        $data = Member::select('jenis_kelamin')
                ->groupBy('jenis_kelamin')
                ->orderBy('jenis_kelamin','ASC')->pluck('jenis_kelamin');
        $members = Member::select(\DB::raw("COUNT(*) as count"))
        ->groupBy('jenis_kelamin')
        ->orderBy('jenis_kelamin','ASC')
                    ->pluck('count');
        
                    $result = [ 'x' => $members,
                                'y'=>  $data
                            ];
        return response()->json($result);
    }

    public function memberJenis(Request $request)
    {
        $jenis = $request->has('jenis') ? $request->jenis : 'year';

        if($jenis == 'year') {
            return $this->memberTahun();
        }
          if($jenis == 'gender') {
           return $this->memberJekel();
        }
         if($jenis == 'profesi') {
            return $this->memberProfesi();
         }
         if($jenis == 'umur') {
            return dd('belum buat');
    }
}
    
    public function memberProfesi() {
        $members = Member::select(\DB::raw("COUNT(*) as count"))
                    ->groupBy('pekerjaan')
                    ->orderBy('pekerjaan', 'ASC')
                    ->pluck('count');
        $chart = new DataMember;
        $chart->dataset('Data Member berdasarkan Profesi', 'bar', $members)->options([
                    'fill' => 'true',
                    'borderColor' => '#51C1C0',
                    // 'backgroundColor' => [
                    //     'white',
                    //     'red',
                    //     'green',
                    //     'blue',
                    //     'yellow',
                    //     'grey',
                    //     'cyan',
                    //     'magenta',
                    //     'black',
                    //     'pink',
                    //     'orange',
                    //     'purple',
                    // ],
                ]);
  
        return $chart->api();
    }
}
