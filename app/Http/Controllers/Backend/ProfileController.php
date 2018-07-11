<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class ProfileController extends Controller
{
    public function profile($name)
    {
        $users = User::where('name', $name)->first();
        return view('backend.profile.index', compact('users'));
    }

    public function profilepassword($name)
    {
        $users = User::where('name', $name)->first();
        return view('backend.profile.password', compact('users'));
    }

    public function updateprofile(Request $request, $id)
    {
       $users = User::find($id);
       $this->validate($request, [
        'name' => 'bail|required|min:2',
        'email' => 'required',
        'password'=>'confirmed'
    ]);
  
       if($request->password){
        $pass = bcrypt($request->password);
        $data = array('password' => $pass,
        );
       }else{
        $data = $request->only('name', 'email');
       }
       $users->update($data);
       Session::flash('flash_notification', [
        'level'=>'success',
        'message'=>'<i class="fa fa-check"></i> Profile  '.$users->name.' Berhasil Di Update'
        ]);
       return redirect(route('home'));       
    }

    public function editpassword($id)
    {
        $password = User::findOrFail($id);
        $users = User::paginate(10);
        return view('backend.admin.index', compact('password', 'users')); 
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
        return redirect(route('admin-kota.index'));  
    }
}
