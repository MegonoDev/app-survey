<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Session;
use App\Dealereo;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/backend/home';


    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'adminlogout', 'saleslogout']);
    }

    public function adminlogout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect('/admin/login');
    }

    public function saleslogout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect('/sales/login');
    }

    public function salesform()
    {
        return view('auth.login-sales');
    }



    public function adminform()
    {
        return view('auth.login-admin');
    }

    public function loginadmin(LoginRequest $request)
    {
        // nek arep login karo email name di ganti email ae yo
        $credential = [
            'name' => $request->name,
            'password' => $request->password
        ];
        if(Auth::attempt($credential, $request->member)){
            if (Auth::user()->role_id != 1 and Auth::user()->role_id != 2) {
                Auth::guard('web')->logout();
                Session::flash('flash_notification', [
                    'level'=>'danger',
                    'message'=>'Cek kembali Username dan Password Anda !!!'
                ]);
                return redirect()->back()->withInput($request->only('name', 'remember'));
            } else {
                return redirect()->intended(route('home'));
            }
        }
        Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'Cek kembali Username dan Password Anda !!!'
        ]);
        return redirect()->back()->withInput($request->only('name', 'remember'));
    }

    public function loginsales(LoginRequest $request)
    {
        // nek arep login karo email name di ganti email ae yo
        $credential = [
            'name' => $request->name,
            'password' => $request->password
        ];
        if(Auth::attempt($credential, $request->member)){
            if (Auth::user()->role_id != 3) {
                Auth::guard('web')->logout();
                Session::flash('flash_notification', [
                    'level'=>'danger',
                    'message'=>'Cek kembali Username dan Password Anda !!!'
                ]);
                return redirect()->back()->withInput($request->only('name', 'remember'));
            } else {
                return redirect()->intended(route('home'));
            }
        }
        Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'Cek kembali Username dan Password Anda !!!'
        ]);
        return redirect()->back()->withInput($request->only('name', 'remember'));
    }
}
