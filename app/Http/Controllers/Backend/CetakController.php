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
use Illuminate\Support\Facades\DB;
use PDF;


class CetakController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cetakLaporanExcel()
    {
        $dealer =  DB::table('dealereos')->pluck("nama_dealer", "id")->all();

        return view('backend.cetak.excel', compact('dealer'));
    }

    public function cetakLaporanPostExcel(Request $request)
    {
        $members = $this->userCheckMember($request);
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun');
        $dealer = $request->get('dealer');
        $dealer = Dealereo::find($dealer);
        $filename = 'Laporan Data Member ' . $bulan . '-' . $tahun . ' by Dealer ' . $dealer->nama_dealer;
        if (count($members) == "") {
            Session::flash('flash_notification', [
                'level' => 'danger',
                'message' => '<i class="fa fa-check"></i> Data Member Bulan ' . $bulan . ' Tahun ' . $tahun . ' Tidak Ada'
            ]);
            return redirect()->back();
        }
        // return Excel::download(new DataExport($members), $filename.'.xls');
        return Excel::create($filename, function ($excel) use ($members, $bulan, $tahun) {
            $excel->setTitle('EONESIA');
            $excel->setCreator('EONESIA')->setCompany('EONESIA');
            $excel->setDescription('DATA CUSTOMER');

            $print = [[
                'No',
                'Nama',
                'Email',
                'Alamat',
                'Tempat Lahir',
                'Tanggal Lahir',
                'Kode',
                'Sales',
                'Tanggal Register'
            ]];
            $no = 1;

            foreach ($members as $member) {
                array_push($print, [
                    $no++,
                    $member->nama,
                    $member->email,
                    $member->alamat,
                    $member->tempat_lahir,
                    $member->tanggal_lahir,
                    $member->kode,
                    $member->sales->namalengkap,
                    $member->CreatedAt
                ]);
            }
            $excel->sheet('Laporan Surat Masuk -' . $bulan . '-' . $tahun, function ($sheet) use ($print, $no) {
                $no = $no + 1;
                $sheet->fromArray($print);
                $sheet->mergeCells('A1:I1');
                $sheet->mergeCells('A1:I1');
                $sheet->setBorder('A2:I' . $no, 'thin');

                /*set height row 1 and 2*/
                $sheet->setHeight(1, 25);
                $sheet->setHeight(2, 15);

                $sheet->cells('A2:I2', function ($cells) {
                    $cells->setBackground('#FFFFFF');
                    $cells->setAlignment('center');
                    $cells->setFontWeight('bold');
                    $cells->setFontSize(10);
                });
            });
        })->download('xls');
    }

    public function cetakLaporanPdf()
    {
        return view('backend.cetak.pdf');
    }

    public function cetakLaporanPostPdf(Request $request)
    {
        $members = $this->userCheckMember($request);
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun');
        $filename = 'Laporan Data Member ' . $bulan . '-' . $tahun;
        if (count($members) == "") {
            Session::flash('flash_notification', [
                'level' => 'danger',
                'message' => '<i class="fa fa-check"></i> Data Member Bulan ' . $bulan . ' Tahun ' . $tahun . ' Tidak Ada'
            ]);
            return redirect()->back();
        }

        $pdf = PDF::loadView('backend.cetak.pdf-laporan', compact('members'));
        return $pdf->setPaper('legal', 'landscape')->download($filename . '.pdf');
    }

    public function userCheckMember(Request $request)
    {
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun');
        $dealer = $request->get('dealer');
        $role = Auth::user()->role_id;
        $sales = Auth::user()->id;
        if ($role == 1) {


            $dealereo = Dealereo::where('id',$dealer)->first();
            
           $members = $dealereo->members()
                ->orderBy('sales_id')
                ->whereMonth('members.created_at', $bulan)
                ->whereYear('members.created_at', $tahun)
                ->groupBy('members.email')
                ->get();

        } elseif ($role == 2) {
            $dealer = Auth::user()->dealereo_id;
            $dealereo = Dealereo::find($dealer);
            $members = $dealereo->members()->where('members.operator_input', '2')
            ->orderBy('sales_id')
            ->whereMonth('members.created_at', $bulan)
            ->whereYear('members.created_at', $tahun)
            ->groupBy('members.email')
            ->get();
        } elseif ($role == 3) {
            $members = Member::where('operator_input', $sales)->whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->get();
        }
        return $members;
    }
}
