<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activitie;
use Illuminate\Support\Facades\DB;
use Carbon;


class FrontendController extends Controller
{
    public function event()
    {
        $this->apievent();
        $activities = Activitie::where('keterangan', 'tersedia')->get();
        return view('welcome', compact('activities'));
    }

    public function pendaftaran($slug)
    {
        $pendaftaran = Activitie::where('slug', $slug)->first();
        if ($pendaftaran == '') {
            return view('errors.404');
        } else {
            return view('frontend.pendaftaran', compact('pendaftaran'));
        }
    }

    public function apievent()
    {
        $date =  Carbon\Carbon::now()->format('y-m-d');
        $event = Activitie::where('finish_event', $date)->get();
        foreach ($event as $key => $value) {
                 $id = $value->id;
                 $finish_event = $value->finish_event;
                 if ($finish_event >= $date ) {
                    $activities = Activitie::find($id);
                    $keterangan = array(
                        'keterangan' => 'selesai',
                    );
                    $activities->update($keterangan);
                }
        }
    }    
}
