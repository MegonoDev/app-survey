<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile($email)
    {
        $users = User::where('email', $email)->first();
        return view('backend.profile.index', compact('users'));
    }

    public function updateprofile(Request $request, $id)
    {
        $update  = User::findOrFail($id);
        $data = $request->all();
        $update->update($data);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<i class="fa fa-check"></i>'.$request->name.' Anda Berhasil Update Profile'
        ]);
        return redirect(route('home'));

    }

    public function profilepassword($email)
    {
        $users = User::where('email', $email)->first();
        return view('backend.profile.password', compact('users'));
    }

    public function updatepassword(Request $request, $id)
    {
        $users = User::find($id);
        $this->validate($request, [
            'password'=>'confirmed'
        ]);
        $pass = bcrypt($request->password);
        $password = array('password' => $pass,
                         );
        $users->update($password);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<i class="fa fa-check"></i> Password  '.$users->name.' Berhasil Di Update'
            ]);
        return redirect(route('home'));
    }
}
