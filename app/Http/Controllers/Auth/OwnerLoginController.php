<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OwnerLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:owner')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.owner-login');
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

        if(Auth::guard('owner')->attempt($data , $request->remember)) {
            return \redirect()->intended(route('owner.dashboard', app()->getLocale()));
        } else {
            return \redirect()->back()->withInput($request->only('email' , 'remember'));
        }
    }
}



