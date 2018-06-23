<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activitie;
use App\Member;

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
        $tersedia = Activitie::where('keterangan', 'tersedia')->get();
        $eventtersedia = $tersedia->count();

        $selesai = Activitie::where('keterangan', 'selesai')->get();
        $eventselesai = $selesai->count();

        $verifikasi = Member::where('status', 'Sudah di Verifikasi')->get();
        $eventterverifikasi = $verifikasi->count();

        return view('home', compact('eventtersedia', 'eventselesai', 'eventterverifikasi'));
    }
}
