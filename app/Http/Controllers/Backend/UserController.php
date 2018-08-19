<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use App\User;
use Session;
use DB;
use Auth;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = $this->userCheckIndex();
        $roles = DB::table('roles')->pluck("nama","id")->all();
        $dealer = DB::table('dealereos')->pluck("kode_dealer","id")->all();
        return view('backend.user.index', compact('users', 'roles', 'dealer'));
    }

    public function store(UserRequest $request)
    {
         $data = $this->userCheckStore($request);
         User::create($data);
         Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<i class="fa fa-check"></i> '.$data['name'].' Berhasil Di Tambah'
         ]);
         return redirect(route('users.index'));
    }

    public function edit($id)
    {
        $role = Auth::user()->role_id;
        $dealer = Auth::user()->dealereo_id;
        if ($role == 1) {
           $edit  = User::findOrFail($id);
        } else {
           $user  = User::findOrFail($id);
           if ($user['dealereo_id'] != $dealer) {
                Session::flash('flash_notification', [
                'level'=>'danger',
                'message'=>'<i class="fa fa-check"></i> Data Yang Anda Cari tidak ada'
                ]);
               return redirect()->back();
           } else {
               $edit  = User::findOrFail($id);
           }
        }
        $roles = DB::table('roles')->pluck("nama","id")->all();
        $dealer = DB::table('dealereos')->pluck("kode_dealer","id")->all();
        $users = $this->userCheckIndex();
        return view('backend.user.index', compact('edit', 'users', 'roles','dealer'));

    }

    public function update(UserRequest $request, $id)
    {
        $update  = User::findOrFail($id);
        $data = $request->all();
        $update->update($data);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<i class="fa fa-check"></i>'.$request->name.' Berhasil Di Update'
        ]);
        return redirect(route('users.index'));
    }


    public function destroy($id)
    {
        $delete = User::findOrFail($id);
        $delete->delete();
        Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<i class="fa fa-check"></i>'.$delete->name.' Berhasil Di Hapus'
        ]);
        return redirect(route('users.index'));
    }

    public function userCheckStore($request)
    {
        $role = Auth::user()->role_id;
        $dealer = Auth::user()->dealereo_id;
        if ($role == 1) {
            $data = $request->all();
            $data['password'] = bcrypt('password');
        } else {
            $data = $request->except('role_id', 'dealereo_id');
            $data['role_id'] = '3';
            $data['dealereo_id'] = $dealer;
            $data['password'] = bcrypt('password');
        }
        return $data;
    }

    public function userCheckIndex()
    {
        $role = Auth::user()->role_id;
        $dealer = Auth::user()->dealereo_id;
        if ($role == 1) {
           $users = User::paginate(10);
        } else {
            $users = User::where('dealereo_id', $dealer)->paginate(10);
        }
        return $users;
    }
}
