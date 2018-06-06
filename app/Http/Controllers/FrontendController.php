<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activitie;
class FrontendController extends Controller
{
    public function event()
    {
        $activities = Activitie::where('keterangan', 'proses')->get();
        return view('welcome', compact('activities'));
    }

    public function pendaftaran($slug)
    {
        $pendaftaran = Activitie::where('slug', $slug)->first();
        return view('frontend.pendaftaran', compact('pendaftaran'));
    }
}
