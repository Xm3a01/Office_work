<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $data =[
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('admin')->attempt($data , $request->remember)) {
            return \redirect()->intended(route('admin.dashboard', app()->getLocale()));
        } else {
            \Session::flash('error' , 'البريد او كلمة المرور غير صحيحه');
            return \redirect()->back()->withInput($request->only('email' , 'remember'));
        }
    }
}


