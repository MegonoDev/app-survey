<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Session;

class UserController extends Controller
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
        $roles = Role::pluck('name', 'id');
        $users = User::paginate(10);
        return view('backend.admin.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        
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
            'name' => 'bail|required|min:2',
            'email' => 'required',
            'password'=>'confirmed',
            'roles' => 'required|min:1'
        ]);

        // hash password
         $request->merge(['password' => bcrypt($request->get('password'))]);
         $user = User::create($request->except('roles'));   
         if($request->roles <> ''){
         $user->roles()->attach($request->roles);
         }

         Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<i class="fa fa-check"></i> Admin  '.$user->name.' Berhasil Di Tambah'
        ]);
         return redirect( route('admin-kota.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = User::findOrFail($id);
        $users = User::paginate(10);
        $roles = Role::pluck('name', 'id'); 
        return view('backend.admin.index', compact('admin', 'users', 'roles'));
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
        $user = User::findOrFail($id);   
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$id,
            // 'password'=>'confirmed'
        ]);

        $input = $request->except('roles');
        $user->fill($input)->save();

        if ($request->roles <> '') {
            $user->roles()->sync($request->roles);        
        }        
        else {
            $user->roles()->detach(); 
        }
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<i class="fa fa-check"></i> Admin  '.$user->name.' Berhasil Di Update'
        ]);
        return redirect( route('admin-kota.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id); 
        $user->delete();
        Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<i class="fa fa-check"></i> Admin  '.$user->name.' Berhasil Di Hapus'
        ]);
        return redirect( route('admin-kota.index'));
    }
}
