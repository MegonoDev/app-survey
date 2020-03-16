<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Select2Controller extends Controller
{
    public function loadSales(Request $request)
    {
        $sales = DB::table('users')
            ->orderBy('namalengkap', 'asc')
            ->join('dealereos', 'dealereos.id', '=', 'users.dealereo_id')
            ->selectRaw("CONCAT(namalengkap,' - ',dealereos.nama_dealer) as namafull,users.id as sales_id")
            ->where('role_id', '=', '3')
            ->where(function ($query) use ($request) {
                return $query->where('users.namalengkap', 'LIKE', '%' . $request->term . '%')
                    ->orWhere('dealereos.nama_dealer', 'LIKE', '%' . $request->term . '%');
            })
            ->get();
        return response()->json($sales);
    }

    // public function loadOldSales(Request $request)
    // {
    //     $sales = DB::table('users')
    //         ->orderBy('namalengkap', 'asc')
    //         ->join('dealereos', 'dealereos.id', '=', 'users.dealereo_id')
    //         ->selectRaw("CONCAT(namalengkap,' - ',dealereos.nama_dealer) as namafull,users.id as sales_id")
    //         ->where('role_id', '=', '3')
    //         ->where('users.id', '=', $request->term)
    //         ->get();

    //     return response()->json($sales);
    // }
}
