<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use Session;

class RoleController extends Controller
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
        $roles = Role::paginate(5);
        return view('backend.role.index', compact('roles'));
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
        $roles = $request->all();
        Role::create($roles);
        Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<h4><i class="fa fa-check">Berhasil !</i></h4> <br> Kota  '.$request->name.' Sukses Di Tambah'
        ]);
        return redirect(route('role.index'));
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
        $roles = Role::paginate(5);
        $rolesedit = Role::findOrFail($id);
        return view('backend.role.index', compact('rolesedit', 'roles'));
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
        $roles = Role::findOrFail($id);
        $data = $request->all();
        $roles->update($data);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<h4><i class="fa fa-check">Berhasil !</i></h4> <br> Kota  '.$roles->name.' Sudah Di Update'
        ]);
        return redirect(route('role.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roles = Role::find($id);
        $roles->delete();
        Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<h4><i class="fa fa-check">Berhasil !</i></h4> <br> Kota  '.$roles->name.' Sukses Di Hapus'
        ]);
        return redirect()->back();
    }
}
