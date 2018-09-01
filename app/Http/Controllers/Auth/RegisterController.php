<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Session;


class RegisterController extends Controller
{


    use RegistersUsers;

    protected $redirectTo = '/backend/home';

    public function __construct()
    {
        $this->middleware('guest');
    }


    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);
    // }


    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function salesregister(Request $request)
    {
       $data = $request->all();
       $data['password'] = Hash::make($request->password);
       $data['role_id']  = 3;
       User::create($data);
         Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'Username '.$request->name.' Berhasil Register .'
        ]);
        return redirect('/sales/login');
    }

}
