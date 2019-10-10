<?php

namespace App\Http\Controllers\Auth;

use App\Owner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OwnerLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:owner')->except('ownerLogout');
    }

    public function showLoginForm()
    {
        return view('auth.owner_login');
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

        $owner = Owner::where('email','=',$data['email'])->first();
        if(Auth::guard('owner')->attempt($data , $request->remember)) {
            $owner->visit_count +=1;
            $owner->save();
            return \redirect()->intended(route('owners.index', app()->getLocale()));
        } else {
            return \redirect()->back()->withInput($request->only('email' , 'remember'));
        }
    }

    public function ownerLogout()
    {
        Auth::guard('owner')->logout();

        return  redirect(app()->getLocale().'/owners/login');
    }
}



