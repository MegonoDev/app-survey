<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use Auth;
use App\Member;


class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile($email)
    {
       $counts = $this->checkUser();
        if (Auth::user()->role_id == 1) {
            $title = 'Admin';
        } elseif(Auth::user()->role_id == 2) {
            $title = 'Sales';
        }else{
            $title = 'Member';
        }

        $counts = $this->checkUser();
        $users = User::where('email', $email)->first();
        return view('backend.profile.index', compact('users', 'counts', 'title'));
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

    public function checkUser()
    {
       if (Auth::user()->role_id == 3) {
          $member = Member::where('operator_input', Auth::user()->id)->get();
          $count = count($member);
       } elseif(Auth::user()->role_id == 2) {
          $sales = User::where('dealereo_id', Auth::user()->dealereo_id)->where('role_id', '3')->get();
          $count = count($sales);
       }else{
          $admin = User::where('role_id', '2')->get();
          $count = count($admin);
       }
       return $count;

    }
}
