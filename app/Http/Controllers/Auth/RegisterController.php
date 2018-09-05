<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Session;
use App\Dealereo;

class RegisterController extends Controller
{


    use RegistersUsers;

    protected $redirectTo = '/backend/home';

    public function __construct()
    {
        $this->middleware('guest');
    }


    public function salesregisterform()
    {
        $dealereos = Dealereo::all();
        return view('auth.register-sales', compact('dealereos'));
    }

    public function salesregister(RegisterRequest $request)
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
