<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
use GuzzleHttp\Client;
use App\Http\Requests\MemberRequest;
use Session;
use Auth;
use App\User;
use DB;
use App\Dealereo;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $lihat_id = $this->lihatId();
        $id_lihat = $lihat_id['0'];
       if (Auth::user()->id == 1) {
          $members = Member::paginate(10);
          $totalmembers = Member::all();
       } else {
          $members = Member::where('dealereo_id', $id_lihat)->paginate(10);
          $totalmembers = Member::where('dealereo_id', $id_lihat)->get();
       }
       $totalMember = count($totalmembers);
        return view('backend.member.index', compact('members', 'totalMember'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('backend.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
}
