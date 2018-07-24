<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PenyelenggaraRequest;
use App\Dealereo;
use App\Organizer;
use DB;
use Session;

class DealereoController extends Controller
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
        $organizers = DB::table('organizers')->pluck("nama","id")->all();
        $roles = DB::table('roles')->pluck("name","id")->all();
        $dealereos = Dealereo::paginate(10);
        return view('backend.penyelenggara.index', compact('dealereos', 'organizers', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PenyelenggaraRequest $request)
    {
        $data = $request->all();
        Dealereo::create($data);
        Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<i class="fa fa-check"></i> Penyelenggara '.$request->nama.' Berhasil Di Tambah'
        ]);
        return redirect(route('penyelenggara.index'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organizers = DB::table('organizers')->pluck("nama","id")->all();
        $roles = DB::table('roles')->pluck("name","id")->all();
        $dealereos = Dealereo::paginate(10);
        $edit      = Dealereo::findOrFail($id);
        return view('backend.penyelenggara.index', compact('dealereos', 'organizers', 'edit', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PenyelenggaraRequest $request, $id)
    {
        $update = Dealereo::find($id);
        $data = $request->all();
        $update->update($data);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<i class="fa fa-check"></i> Penyelenggara '.$request->nama.' Berhasil Di Update'
        ]);
        return redirect(route('penyelenggara.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $update = Dealereo::find($id);
        $update->delete();
        Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<i class="fa fa-check"></i> Penyelenggara '.$update->nama.' Berhasil Di Hapus'
        ]);
        return redirect()->back();
        
    }
}
