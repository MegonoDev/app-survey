<?php
namespace App\Exports;
use App\Member;
use App\Dealereo;
use Auth;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class PdfExport implements FromView
{
    private $members;
 
    public function __construct($members)
    {
        $this->members = $members;
    }
    
    public function view(): View
    {
        return view('backend.cetak.pdf-laporan', [
            'members' => $this->members
        ]);
    }
}
