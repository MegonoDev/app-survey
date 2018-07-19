<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location;
use Session;


class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::paginate(10);
        $lokasi = Location::all();
        $totalLokasi = count($lokasi);
        return view('backend.lokasi.index', compact('locations', 'totalLokasi'));
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:2'
        ]);
        $data = $request->all();
        Location::create($data);
        Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<i class="fa fa-check"></i> Lokasi '.$request->nama.' Berhasil Di Tambah'
        ]);
        return redirect(route('lokasi-kota.index'));
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
        $locations = Location::paginate(10);
        $lokasi = Location::all();
        $totalLokasi = count($lokasi);
        $edit = Location::findOrFail($id);
        return view('backend.lokasi.index', compact('locations', 'totalLokasi', 'edit'));
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
        $this->validate($request, [
            'nama' => 'required|min:2'
        ]);
        $update = Location::find($id);
        $data = $request->all();
        $update->update($data);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<i class="fa fa-check"></i> Lokasi '.$request->nama.' Berhasil Di Update'
        ]);
        return redirect(route('lokasi-kota.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Location::find($id);
        $delete->delete();
        Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<i class="fa fa-check"></i> Lokasi '.$delete->nama.' Berhasil Di Hapus'
        ]);
        return redirect()->back();
    }
}
